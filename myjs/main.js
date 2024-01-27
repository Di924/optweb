var bookmarkButton = document.getElementById("tweet");

const currentUrl = window.location.href;
const currentTitle = document.title;

bookmarkButton.addEventListener("click", function() {
    alert(currentTitle + " " + currentUrl + "\nЧтобы добавить текущую веб-страницу в закладки браузера, нажмите Ctrl+D (Cmd+D на Mac).");
    
    var badge = document.getElementById("badge");
    badge.remove();
});