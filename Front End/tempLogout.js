$(window).on('beforeunload', function() {
    $.ajax({
        url: 'logout.php', // PHP script to handle session destruction
        method: 'POST', // Or 'GET' depending on your setup
        async: false, // Synchronous AJAX request to ensure it completes before the page unloads
    });
});
