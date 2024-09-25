document.getElementById('chatButton').addEventListener('click', function() {
    var chatBox = document.getElementById('chatBox');
    if (chatBox.style.display === 'none' || chatBox.style.display === '') {
        chatBox.style.display = 'flex'; // Show the chatbox
    } else {
        chatBox.style.display = 'none'; // Hide the chatbox
    }
});

document.getElementById('closeChat').addEventListener('click', function() {
    document.getElementById('chatBox').style.display = 'none';
});
