
//--------- Popup Tugas ---------//
let popupTasks = document.getElementById("popup-tasks");
let navbar = document.getElementsByClassName("nav-navbar")[0];
let sidebar = document.getElementsByClassName("sidebars")[0];
let popupTask = document.getElementsByClassName("popup-tasks")[0];
let overlayTask = document.getElementsByClassName("overlay")[0];
let iconDelete = document.getElementById("delete-icon");
let iconEdit = document.getElementById("edit-icon");
let iconClose = document.getElementById("close-icon");
let iconBackToPopupEvent = document.getElementById("back-arrow-circle");
let iconCloseEvent = document.getElementById("close-icon-event");

let popupDiscussion = document.getElementById("popup-discussion");
let popupDiskusi = document.getElementsByClassName("popup-discussion")[0];

let popupUploadFile = document.getElementById("popup-uploadfile");

let isEditMode = false;
let currentTaskId = null;

function openPopupTasks() {
    popupTasks.classList.add("open-popup-tasks");
    iconClose.style.display = 'inline-block';
    navbar.style.zIndex = "-1";
    popupTask.style.zIndex = "1020";
    overlayTask.style.zIndex = "1020";

    document.getElementById('submitBtn').style.display = 'inline-block';
    document.getElementById('finishBtn').style.display = 'none';
    document.getElementById('saveBtn').style.display = 'none';
}

function closePopupTasks() {
    popupTasks.classList.remove("open-popup-tasks");
    iconClose.style.display = 'none';
    navbar.style.zIndex = "1020";
    popupTask.style.zIndex = "";
    overlayTask.style.zIndex = "";

}

function openPopupTasksEvent(taskId = null) {
    // Reset form
    document.querySelector('.taskForm').reset();

    if (taskId) {

        // Menampilkan display pada span atau text
        document.getElementById('taskNameDisplay').style.display = 'inline-block';
        document.getElementById('taskStartDisplay').style.display = 'inline-block';
        document.getElementById('taskFinishDisplay').style.display = 'inline-block';
        document.getElementById('taskPersonDisplay').style.display = 'inline-block';
        document.getElementById('taskDetailDisplay').style.display = 'inline-block';

        // Menampilkan data dalam bentuk text
        document.getElementById('taskId').innerText = taskId.id || '';
        document.getElementById('taskNameDisplay').innerText = taskId.title || '';
        document.getElementById('taskStartDisplay').innerText = taskId.start ? taskId.start.toISOString().slice(0, 10) + "  " + taskId.start.toISOString().slice(11, 16) : '';
        document.getElementById('taskFinishDisplay').innerText = taskId.end ? taskId.end.toISOString().slice(0, 10) + " " + taskId.end.toISOString().slice(11, 16) : '';
        document.getElementById('taskPersonDisplay').innerText = taskId.extendedProps.person || '';
        document.getElementById('taskDetailDisplay').innerText = taskId.extendedProps.detail || '';

        // Menghilangkan Display pada input dan textarea
        document.getElementById('taskName').style.display = 'none';
        document.getElementById('taskStart').style.display = 'none';
        document.getElementById('taskFinish').style.display = 'none';
        document.getElementById('taskDetail').style.display = 'none';
        document.getElementById('taskPerson').style.display = 'none';
        document.getElementById('div-taskPerson').style.display = 'none';

        document.getElementById('taskId').value = taskId.id || '';
        document.getElementById('taskName').value = taskId.title || '';
        document.getElementById('taskStart').value = taskId.start ? taskId.start.toISOString().slice(0, 16) : '';
        document.getElementById('taskFinish').value = taskId.end ? taskId.end.toISOString().slice(0, 16) : '';
        // Mengatur checkbox
        const person = taskId.extendedProps.person ? taskId.extendedProps.person.split(', ') : [];
        document.querySelectorAll('input[name="person[]"]').forEach(checkbox => {
            checkbox.checked = person.includes(checkbox.value);
        });
        document.getElementById('taskDetail').value = taskId.extendedProps.detail || '';


        // Show buttons for view mode
        document.getElementById('submitBtn').style.display = 'none';
        document.getElementById('finishBtn').style.display = 'inline-block';
        document.getElementById('saveBtn').style.display = 'none';


        // Menampilkan ikon hapus
        iconDelete.style.display = 'inline-block';
        iconEdit.style.display = 'inline-block';
        iconCloseEvent.style.display = 'inline-block';
        iconClose.style.display = 'none';
        iconBackToPopupEvent.style.display = 'none';

    } else {
        // Sembunyikan ikon hapus saat menambah tugas baru
        iconDelete.style.display = 'none';
        iconEdit.style.display = 'none';
        iconCloseEvent.style.display = 'none';
        iconClose.style.display = 'inline-block';
        iconBackToPopupEvent.style.display = 'inline-block';

        document.getElementById('submitBtn').style.display = 'inline-block';
        document.getElementById('finishBtn').style.display = 'none';
        document.getElementById('saveBtn').style.display = 'none';
    }
    popupTasks.classList.add("open-popup-tasks");
    navbar.style.zIndex = "-1";
    popupTask.style.zIndex = "1020";
    overlayTask.style.zIndex = "1020";
}

function closePopupTasksEvent() {
    // Menghilangkan display pada span atau text
    document.getElementById('taskNameDisplay').style.display = 'none';
    document.getElementById('taskStartDisplay').style.display = 'none';
    document.getElementById('taskFinishDisplay').style.display = 'none';
    document.getElementById('taskDetailDisplay').style.display = 'none';
    document.getElementById('taskPersonDisplay').style.display = 'none';

    // Menampilkan Display pada input dan textarea
    document.querySelector('input[name="name"]').style.display = 'inline-block';
    document.querySelector('input[name="start"]').style.display = 'inline-block';
    document.querySelector('input[name="finish"]').style.display = 'inline-block';
    document.querySelector('textarea[name="detail"]').style.display = 'inline-block';
    document.querySelector('input[name="person[]"]').style.display = 'inline-block';
    document.getElementById('div-taskPerson').style.display = 'inline-block';

    // Reset buttons and icons
    document.getElementById('submitBtn').style.display = 'none';
    document.getElementById('finishBtn').style.display = 'none';
    document.getElementById('saveBtn').style.display = 'none';

    document.getElementById('taskId').value = '';
    document.getElementById('taskName').value = '';
    document.getElementById('taskStart').value = '';
    document.getElementById('taskFinish').value = '';
    document.getElementById('taskDetail').value = '';
    document.getElementById('taskPerson').value = '';

    document.querySelectorAll('input[name="person[]"]').forEach(checkbox => {
        checkbox.checked = false;
    });

    // Menghilangkan display ikon
    iconDelete.style.display = 'none';
    iconEdit.style.display = 'none';
    iconBackToPopupEvent.style.display = 'none';
    iconCloseEvent.style.display = 'none';
    iconClose.style.display = 'inline-block';

    popupTasks.classList.remove("open-popup-tasks");
    navbar.style.zIndex = "1020";
    popupTask.style.zIndex = "";
    overlayTask.style.zIndex = "";
}

function backToPopupTaskEvent() {
    // Menampilkan elemen-elemen dalam mode non-edit
    document.getElementById('taskNameDisplay').style.display = 'inline-block';
    document.getElementById('taskStartDisplay').style.display = 'inline-block';
    document.getElementById('taskFinishDisplay').style.display = 'inline-block';
    document.getElementById('taskDetailDisplay').style.display = 'inline-block';
    document.getElementById('taskPersonDisplay').style.display = 'inline-block';

    // Menyembunyikan elemen input
    document.getElementById('taskName').style.display = 'none';
    document.getElementById('taskStart').style.display = 'none';
    document.getElementById('taskFinish').style.display = 'none';
    document.getElementById('taskDetail').style.display = 'none';
    document.getElementById('taskPerson').style.display = 'none';
    document.getElementById('div-taskPerson').style.display = 'none';

    // Menampilkan atau menyembunyikan tombol sesuai mode non-edit
    document.getElementById('submitBtn').style.display = 'none';
    document.getElementById('saveBtn').style.display = 'none';
    document.getElementById('finishBtn').style.display = 'inline-block';
    iconDelete.style.display = 'inline-block';
    iconCloseEvent.style.display = 'inline-block';
    iconClose.style.display = 'none';
    iconBackToPopupEvent.style.display = 'none';
}

function toggleEditMode(enable = !isEditMode) {
    isEditMode = enable;

    const displayStyle = isEditMode ? 'none' : 'inline-block';
    const inputStyle = isEditMode ? 'inline-block' : 'none';

    // Tampilkan atau sembunyikan elemen yang sesuai berdasarkan mode edit
    document.getElementById('taskNameDisplay').style.display = displayStyle;
    document.getElementById('taskStartDisplay').style.display = displayStyle;
    document.getElementById('taskFinishDisplay').style.display = displayStyle;
    document.getElementById('taskDetailDisplay').style.display = displayStyle;
    document.getElementById('taskPersonDisplay').style.display = displayStyle;

    document.getElementById('taskName').style.display = inputStyle;
    document.getElementById('taskStart').style.display = inputStyle;
    document.getElementById('taskFinish').style.display = inputStyle;
    document.getElementById('taskDetail').style.display = inputStyle;
    document.getElementById('taskPerson').style.display = inputStyle;

    document.getElementById('div-taskPerson').style.display = inputStyle;

    // Tampilkan atau sembunyikan tombol sesuai mode edit
    document.getElementById('submitBtn').style.display = isEditMode ? 'none' : 'inline-block';
    document.getElementById('saveBtn').style.display = isEditMode ? 'inline-block' : 'none';
    document.getElementById('finishBtn').style.display = isEditMode ? 'none' : 'inline-block';
    iconDelete.style.display = isEditMode ? 'none' : 'inline-block';
    iconBackToPopupEvent.style.display = isEditMode ? 'inline-block' : 'none';
}

function deleteTask(taskId) {
    fetch(`http://127.0.0.1:8000/api/tasks/delete-task/${taskId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Task created successfully') {
                closePopupTasks();
            }
        });
}


document.getElementById('delete-icon').addEventListener('click', function () {
    const taskId = document.getElementById('taskId').value;
    if (confirm('Are you sure you want to delete this task?')) {
        deleteTask(taskId);
        location.reload();
    } else {
        throw new Error('Failed to delete task.');
    }
});




// JavaScript

$(document).ready(function () {
    var memberList = document.getElementById('MemberList');
    var memberNames = memberList.getElementsByClassName('member-name');

    // Ketika tombol "Lihat Semua" diklik
    $('#toggleMember').click(function () {

        // Toggle nama anggota
        $('.member-name').toggle();

        // Ubah teks tombol menjadi "Sembunyikan" atau "Lihat Semua"

        if ($(this).text() === 'Lihat Semua') {
            $(this).text('Sembunyikan');
            $('.member-list').css('flex-direction', 'column');

            $('.member-profile').css('margin-bottom', '0.7rem');
            $('.member-profile').css('display', 'flex');
            $('.member-profile').css('align-items', 'center');
            $('.member-profile').css('flex-direction', 'row');

            $('.member-name').css('margin-left', '10px');
        } else {
            $(this).text('Lihat Semua');
            // Jika tombol menjadi "Sembunyikan", hapus style pada class member-list
            $('.member-list').css('flex-direction', '');

            $('.member-profile').css('margin-bottom', '');
            $('.member-profile').css('display', '');
            $('.member-profile').css('align-items', '');
            $('.member-profile').css('flex-direction', '');

            $('.member-profile').css('margin-left', '');
        }


        $(this).text(buttonText);
    });
});




document.addEventListener("DOMContentLoaded", function () {
    // Periksa apakah ada elemen yang memiliki kelas 'active'
    var activeElement = document.querySelector('.a-btn-hackathon.active');

    // Periksa apakah ada elemen yang memiliki kelas 'collapse' yang terhubung dengan elemen yang aktif
    var activeCollapse = activeElement.getAttribute('data-bs-target');

    // Periksa apakah elemen yang sesuai dengan 'activeCollapse' ada
    if (activeCollapse) {
        var collapseElement = document.querySelector(activeCollapse);

        // Periksa apakah elemen yang sesuai dengan 'activeCollapse' adalah elemen yang valid
        if (collapseElement) {
            collapseElement.classList.add('show');
        }
    }
});


// Add Forum Discussion
document.getElementById('taskFormDiscussion').addEventListener('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('{{ route(tasks.discussion) }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Task created successfully') {
                closePopupTasks();
            }
        });
});


document.getElementById('taskForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('{{ route(tasks.store) }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Task created successfully') {
                closePopupTasks();
            }
        });
});


document.getElementById('taskForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('{{ route(tasks.store2) }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Task created successfully') {
                closePopupTasks();
            }
        });
});


document.getElementById('taskForm').addEventListener('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch('{{ route(tasks.store3) }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.message === 'Task created successfully') {
                closePopupTasks();
                fetchTasks();
            }
        });
});


// Function to fetch task data from server
function fetchTaskData(taskId) {
    fetch(`http://127.0.0.1:8000/api/tasks/${taskId}`)
        .then(response => response.json())
        .then(task => {
            document.getElementById('taskNameDisplay').innerText = task.title;
            document.getElementById('taskStartText').innerText = task.start;
            document.getElementById('taskEndText').innerText = task.end;
            document.getElementById('taskDetailText').innerText = task.detail;
            document.getElementById('taskPersonText').innerText = task.person;
        })
        .catch(error => console.error('Error fetching task data:', error));
}

// Function to save task changes
function saveTaskChanges(taskId) {
    const formData = {
        title: document.getElementById('taskName').value,
        start: document.getElementById('taskStart').value,
        end: document.getElementById('taskFinish').value,
        person: document.getElementById('taskPerson').value,
        detail: document.getElementById('taskDetail').value
    };

    fetch(`http://127.0.0.1:8000/api/tasks/update-task/${taskId}`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(formData)
    })
        .then(response => {
            if (response.ok) {
                // Refresh task details
                fetchTaskData(taskId);
                console.log('Task updated successfully!');
            } else {
                console.error('Failed to update task.');
            }
        })
        .catch(error => {
            console.error('Error updating task:', error);
        });
}


document.getElementById('saveBtn').addEventListener('click', function (event) {
    event.preventDefault();
    const taskId = document.getElementById('taskId').value;
    if (taskId) {
        saveTaskChanges(taskId);
        location.reload();
    }
});


//-------- ---- Popup Create Discussion ----- ------------- //

function openPopupDiscussion() {
    popupDiscussion.classList.add("open-popup-discussion");
    navbar.style.zIndex = "-1";
    popupDiskusi.style.zIndex = "1020";
    overlayTask.style.zIndex = "1020";
}

function closePopupDiscussion() {
    popupDiscussion.classList.remove("open-popup-discussion");
    navbar.style.zIndex = "1020";
    popupDiskusi.style.zIndex = "";
    overlayTask.style.zIndex = "";
}

function openPopupUploadFile() {
    popupUploadFile.classList.add("open-popup-uploadfile");
}

function closePopupUploadFile() {
    popupUploadFile.classList.remove("open-popup-uploadfile");
}

const textarea = document.getElementById('comment');

textarea.addEventListener('input', function () {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + '200px';
});

textarea.addEventListener('keydown', function (event) {
    if (event.key === 'Enter' && !event.shiftKey) {
        event.preventDefault();
        // Add your send message code here
        alert('Message sent: ' + this.value);
        this.value = '';
        this.style.height = '40px'; // Reset to initial height
    }
});

function sendMessage() {
    const chatBody = document.getElementById('chatBody');
    const chatInput = document.getElementById('chatInput');

    const message = chatInput.value.trim();

    if (message) {
        fetch('/send-message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ message })
        })
            .then(response => response.json())
            .then(data => {
                const messageElement = document.createElement('p');
                messageElement.textContent = data.message;
                chatBody.appendChild(messageElement);
                chatInput.value = '';
                chatBody.scrollTop = chatBody.scrollHeight;
            })
            .catch(error => console.error('Error:', error));
    }
}
