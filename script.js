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
document.getElementById('userIcon').addEventListener('click', function() {
    const userInfoBox = document.getElementById('userInfoBox');
    userInfoBox.style.display = userInfoBox.style.display === 'none' ? 'block' : 'none';
});

document.getElementById('userInfoLink').addEventListener('click', function(event) {
    event.preventDefault(); // Ngăn chặn hành động mặc định
    document.getElementById('overlay').style.display = 'block'; // Hiển thị overlay
    document.getElementById('userInfoForm').style.display = 'block'; // Hiển thị form
});

document.getElementById('infoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Thay đổi đã được lưu!');
    document.getElementById('userInfoForm').style.display = 'none';
    document.getElementById('overlay').style.display = 'none'; // Ẩn overlay
});

document.getElementById('closeForm').addEventListener('click', function() {
    document.getElementById('userInfoForm').style.display = 'none';
    document.getElementById('overlay').style.display = 'none'; // Ẩn overlay
});

// Ẩn form và overlay khi nhấn vào overlay
document.getElementById('overlay').addEventListener('click', function() {
    document.getElementById('userInfoForm').style.display = 'none';
    document.getElementById('overlay').style.display = 'none'; // Ẩn overlay
});