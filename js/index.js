document.getElementById('show-comments-btn').addEventListener('click', function () {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('comment').innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', 'indexupdate.php', true);
    xhr.send();
});

