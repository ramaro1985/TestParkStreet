(function () {

  angular
    .module('app')
    .controller('ProductController', ProductController);

  function ProductController($scope, $location, $http, config, NgTableParams) {
    this.$http = $http;
    this.config = config;

    // Default values, usually fetched from the url
    // to allow direct access to the filtered table
    var sorting = {title: 'asc'};
    var page = 1;
    var count = 10;

    // Setup and publish the table on the scope
    $scope.tableParams = new NgTableParams({page: page, count: count, sorting: sorting},
      {
        total: 0,
        getData: function ($defer, tableParams) {
          this.fetchProducts(this.createQuery(tableParams), tableParams, $defer);
        }.bind(this)
      }
    );
  }

  /**
   * Create the query object we need to send to our API endpoint
   * from the table params.
   */
  ProductController.prototype.createQuery = function (tableParams) {
    var query = {
      page: tableParams.page(),
      limit: tableParams.count()
    };

    // The orderBy is in the form ["+state", "-title"]
    // where '+' represents ascending and '-' descending
    // We need to convert it to the format accepted by our API
    _.each(tableParams.orderBy(), function (dirColumn) {
      var key = 'sorting[' + dirColumn.slice(1) + ']';
      query[key] = (dirColumn[0] === '+') ? 'asc' : 'desc';
    });

    return query;
  };

  /**
   * Fetch the product list by sending the HTTP request to the products endpoint.
   */
  ProductController.prototype.fetchProducts = function (query, tableParams, $defer) {
    this.$http({
      url: this.config.baseUrl + '/index',
      method: 'GET',
      params: query
    }).then(
      // Success callback
      function (response) {
        var data = response.data;
        var products = data._embedded.items;

        // Set the total number of products
        tableParams.total(data.total);

        // Resolve the defer with the products array
        $defer.resolve(products);
      }
    );
  }

})();