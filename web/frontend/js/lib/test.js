var start = 1;
function ChangeDropDown(element)
{
  jQuery(element).parents(".dropdown").find(".dropdown-toggle").find("span").text(jQuery(element).text());
  var fill = element.id.split('@');

  if (fill[1] == "client") {
    jQuery("#client_id").val(fill[0]);
    jQuery("#product_list").empty();
    jQuery("#date_id").val(0);
  }

  if (fill[1] == "product") {
    jQuery("#product_id").val(fill[0]);
    jQuery("#date_id").val(0);
    GetSearchValues();
  }
  if (fill[1] == "date") {
    jQuery("#date_id").val(fill[0]);
  }
}
function GetSearchValues()
{
  jQuery.ajax({
    url: window.location.pathname,
    type: "POST",
    data: {
      start: start,
      client_id: jQuery("#client_id").val(),
      product_id: jQuery("#product_id").val(),
      date_id: jQuery("#date_id").val()

    },
    success: function (response)
    {
      jQuery('#all_content').empty();
      jQuery('#product_list').empty();
      jQuery('#all_content').html(response);
      jQuery('#loadingOff').addClass('hide');

    },
    error: function (response)
    {
      alert(response);
    }
  });
}
jQuery(document).ready(function ()
{
  jQuery(".dropdown").find(".dropdown-menu li a").click(function ()
  {
    jQuery('#loadingOff').removeClass('hide');
    ChangeDropDown(this);
    GetSearchValues();
  });

  jQuery("#all_content").on("click", ".pagination span a", function ()
  {
    var url = jQuery(this).attr("href");
    var currentvalue = url.split("page=")[1];
    start = currentvalue;
    GetSearchValues();
    return false;
  });
})
