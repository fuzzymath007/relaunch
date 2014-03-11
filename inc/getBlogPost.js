$.ajax({
  url      : document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent('http://blog.wineflaneur.com/feed/'),
  dataType : 'XML',
  success  : function (data) {
    if (data.responseData.feed && data.responseData.feed.items) {
      $.each(data.responseData.feed.items, function (i, e) {
        console.log("------------------------");
        console.log("title      : " + e.title);
        console.log("author     : " + e.author);
        console.log("description: " + e.description);
      });
    }
  }
});