// Mở chat box dựa trên trạng thái lưu trữ
window.onload = function() {
    var chatBoxStatus = localStorage.getItem('chatBoxStatus');
    if (chatBoxStatus === 'open') {
        document.getElementById('chatBox').style.display = 'flex'; // Hiển thị khung chat
    }
};

// Thêm sự kiện mở/đóng chat box và lưu trạng thái
document.getElementById('chatButton').addEventListener('click', function() {
    var chatBox = document.getElementById('chatBox');
    if (chatBox.style.display === 'none' || chatBox.style.display === '') {
        chatBox.style.display = 'flex'; // Hiển thị khung chat
        localStorage.setItem('chatBoxStatus', 'open'); // Lưu trạng thái mở
    } else {
        chatBox.style.display = 'none'; // Ẩn khung chat
        localStorage.setItem('chatBoxStatus', 'closed'); // Lưu trạng thái đóng
    }
});

// Sự kiện đóng khung chat bằng nút 'close'
document.getElementById('closeChat').addEventListener('click', function() {
    document.getElementById('chatBox').style.display = 'none';
    localStorage.setItem('chatBoxStatus', 'closed'); // Lưu trạng thái đóng
});

// Thêm sự kiện khi nhấn vào icon người dùng
document.getElementById('userIcon').addEventListener('click', function() {
    document.getElementById('overlay').style.display = 'block'; // Hiển thị overlay
    document.getElementById('userInfoForm').style.display = 'block'; // Hiển thị form thông tin cá nhân
});

// Đóng form thông tin cá nhân khi nhấn vào nút 'close' trong form
document.getElementById('closeForm').addEventListener('click', function() {
    document.getElementById('userInfoForm').style.display = 'none';
    document.getElementById('overlay').style.display = 'none'; // Ẩn overlay
});

// Ẩn form và overlay khi nhấn vào overlay
document.getElementById('overlay').addEventListener('click', function() {
    document.getElementById('userInfoForm').style.display = 'none';
    document.getElementById('overlay').style.display = 'none'; // Ẩn overlay
});

// Thêm sự kiện submit form
document.getElementById('infoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Thay đổi đã được lưu!');
    document.getElementById('userInfoForm').style.display = 'none';
    document.getElementById('overlay').style.display = 'none'; // Ẩn overlay
});
