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

