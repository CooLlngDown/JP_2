   // JavaScript to handle navigation and content switching
//    const navLinks = document.querySelectorAll('.nav-link');
   const contentSections = document.querySelectorAll('.content-section');
   const globalSearch = document.getElementById('globalSearch');
   const searchButton = document.getElementById('searchButton');

   navLinks.forEach(link => {
       link.addEventListener('click', function(event) {
           event.preventDefault(); // Prevent page refresh
           const sectionId = this.getAttribute('data-section');
           
           // Hide all sections
           contentSections.forEach(section => {
               section.style.display = 'none';
           });

           // Show the clicked section
           document.getElementById(sectionId).style.display = 'block';

           // Clear search input when navigating
           globalSearch.value = '';

           // Update active state on the navbar
           navLinks.forEach(link => link.classList.remove('active'));
           this.classList.add('active');
       });
   });

   // Search Functionality
   searchButton.addEventListener('click', function() {
    const query = globalSearch.value.toLowerCase(); // Lấy từ khóa tìm kiếm
    let hasResult = false; // Biến để theo dõi có kết quả hay không

    // Ẩn tất cả các phần trước khi hiển thị kết quả
    contentSections.forEach(section => {
        section.style.display = 'none'; // Ẩn tất cả các phần
    });

    // Tìm kiếm theo từ khóa
    contentSections.forEach(section => {
        const sectionContent = section.getAttribute('data-content'); // Lấy nội dung từ thuộc tính
        const sectionTitle = section.querySelector('h2') ? section.querySelector('h2').innerText : ''; // Lấy tiêu đề nếu có

        // Kiểm tra xem từ khóa có trong nội dung hoặc tiêu đề không
        if ((sectionContent && sectionContent.toLowerCase().includes(query)) ||
            (sectionTitle && sectionTitle.toLowerCase().includes(query))) {
            section.style.display = 'block'; // Hiển thị phần nếu khớp
            hasResult = true; // Đánh dấu có kết quả
        }
    });

    // Nếu không có kết quả nào khớp
    if (!hasResult) {
        alert("Không tìm thấy kết quả"); // Hiển thị thông báo không có kết quả
    }
});


    // Function to set the content for editing
   function setEditContent(title, content) {
       document.getElementById('editTitle').value = title;
       document.getElementById('editContent').value = content;
   }

   // Example for setting title and content for editing
   document.querySelectorAll('.btn-outline-success').forEach(button => {
       button.addEventListener('click', function() {
           const listItem = this.closest('.list-group-item');
           const title = listItem.childNodes[0].textContent.trim(); // Tiêu đề
           const content = listItem.childNodes[0].textContent.trim(); // Nội dung (đang để giả sử là tiêu đề cho cả hai)
           setEditContent(title, content);
       });
   });

   // Save changes when the "Save" button is clicked
   document.getElementById('saveChanges').addEventListener('click', function() {
       const editedTitle = document.getElementById('editTitle').value;
       const editedContent = document.getElementById('editContent').value;
       console.log('Edited title:', editedTitle);
       console.log('Edited content:', editedContent);

       // Handle the logic to save the edited content (e.g., update the UI or make an API call)
       
       // Close the modal
       var modal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
       modal.hide();
   });

   // when click xoa button will pop up anounce 
//    function confirmDelete(button, itemName) {
//     const confirmMessage = `Bạn chắc chắn muốn xóa nội dung "${itemName}" không?`;
//     const confirmed = confirm(confirmMessage);
//     if (confirmed) {
//         // Thực hiện hành động xóa ở đây
//         alert(`Nội dung "${itemName}" đã được xóa!`);
//         // Nếu bạn muốn xóa nút, có thể thực hiện như sau:
//         button.closest('li').remove();
//          }
//     }


// Biến toàn cục để lưu phần tử cần xóa
let currentDeleteItem;

// Function to set the content for editing
function setEditContent(title, content) {
    document.getElementById('editTitle').value = title;
    document.getElementById('editContent').value = content;
}

// Example for setting title and content for editing
document.querySelectorAll('.btn-outline-success').forEach(button => {
    button.addEventListener('click', function() {
        const listItem = this.closest('.list-group-item');
        const title = listItem.childNodes[0].textContent.trim(); // Tiêu đề
        const content = listItem.childNodes[0].textContent.trim(); // Nội dung
        setEditContent(title, content);
    });
});

// Save changes when the "Save" button is clicked
document.getElementById('saveChanges').addEventListener('click', function() {
    const editedTitle = document.getElementById('editTitle').value;
    const editedContent = document.getElementById('editContent').value;
    console.log('Edited title:', editedTitle);
    console.log('Edited content:', editedContent);

    // Logic to save the edited content

    // Show success toast notification
    var toast = new bootstrap.Toast(document.getElementById('toastNotification'));
    toast.show();

    // Close the modal
    var modal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    modal.hide();
});

// Handle delete confirmation
document.querySelectorAll('.btn-outline-danger').forEach(button => {
    button.addEventListener('click', function() {
        // Lưu phần tử cần xóa
        currentDeleteItem = this.closest('.list-group-item');

        // Show the confirm delete modal
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        deleteModal.show();
    });
});

// Handle confirm delete action
document.getElementById('confirmDelete').onclick = () => {
    if (currentDeleteItem) {
        // Xóa nội dung tương ứng
        currentDeleteItem.remove();
        console.log('Content has been deleted!'); // Thay thế bằng logic xóa thực sự
        
        // Show success toast notification
        var toast = new bootstrap.Toast(document.getElementById('toastNotification'));
        toast.show();
        
        // Reset biến sau khi xóa
        currentDeleteItem = null;
    }

    // Close the delete modal
    var deleteModal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
    deleteModal.hide();
};

// xư ly hien thi noi dung
// Lấy danh sách các thẻ li
const listItems = document.querySelectorAll('#list-group li');
const output = document.getElementById('output');

// Lặp qua từng thẻ li và thêm sự kiện click
listItems.forEach(function(item) {
  item.addEventListener('click', function() {
    // Hiển thị nội dung của thẻ li trong phần output
    output.textContent = "Nội dung của thẻ là: " + this.textContent;
  });
});

