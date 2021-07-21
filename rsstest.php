<html>
<head>
<script>



$(document).ready(function() {
    var url = 'https://www.reddit.com/r/Driverless/.rss?format=xml'; //Data in XML format
    $.ajax({
        type: 'GET',
        url: "https://api.rss2json.com/v1/api.json?rss_url=" + url, //For converting default format to JSON format
        dataType: 'jsonp', //for making cross domain call
        success: function(data) {
            alert('Success');
            $("#rss-default").append(data.feed);
            console.log(data.feed.description);
        }
    });
});

</script>
</head>
<body>

<form>
<select onchange="showRSS(this.value)">
<option value="">Select an RSS-feed:</option>
<option value="Google">Google News</option>
<option value="NBC">NBC News</option>
</select>
</form>
<br>
<div id="rssOutput">RSS-feed will be listed here...</div>
</body>
</html>
