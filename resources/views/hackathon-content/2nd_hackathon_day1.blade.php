@extends('.head')

@section('main-contents')
    <div class="sidebars d-flex flex-row ">
        <div class="containers-sidebar flex-column"
            style="background-image: url(img/bg-side.png);
        background-repeat: no-repeat;
        background-position: center;">
            <!--- | Day 21-23 ~ 1st Hackathon Day 1-3 | --->
            <a href="#" class="a-btn-hackathon align-items-center collapsed py-2" data-bs-toggle="collapse"
                data-bs-target="#hackathon_1st_day_1-collapse" aria-expanded="true">
                <div class="align-items-center my-3">
                    <div class="col pd-right-col">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="w-100">
                                <h6 class="my-3 fw-bold h6-hackathon">Day 21 - 1st Hackathon Day 1</h6>
                            </div>
                            <div class="icon-chev-right">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <li class="li-hackathon-day1 collapse my-3" id="hackathon_1st_day_1-collapse">
                <a href="/dashboard_hackathon-1st-day1" class="a-hackathon-meeting">
                    <div class="icon-earmark"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="text-earmark">
                        <h6 class="">Tugas Bukti Record Meeting Kelompok</h6>
                    </div>
                </a>
            </li>

            <a href="#" class="a-btn-hackathon align-items-center collapsed py-2" data-bs-toggle="collapse"
                data-bs-target="#hackathon_1st_day_2-collapse" aria-expanded="true">
                <div class="align-items-center my-3">
                    <div class="col pd-right-col">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="w-100">
                                <h6 class="my-3 fw-bold h6-hackathon">Day 22 - 1st Hackathon Day 2</h6>
                            </div>
                            <div class="icon-chev-right">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <li class="li-hackathon-day1 collapse my-3" id="hackathon_1st_day_2-collapse">
                <a href="/dashboard_hackathon-1st-day2" class="a-hackathon-meeting">
                    <div class="icon-earmark"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="text-earmark">
                        <h6 class="">Tugas Bukti Record Meeting Kelompok</h6>
                    </div>
                </a>
            </li>
            <a href="#" class="a-btn-hackathon align-items-center collapsed py-2" data-bs-toggle="collapse"
                data-bs-target="#hackathon_1st_day_3-collapse" aria-expanded="true">
                <div class="align-items-center my-3">
                    <div class="col pd-right-col">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="w-100">
                                <h6 class="my-3 fw-bold h6-hackathon">Day 23 - 1st Hackathon Day 3</h6>
                            </div>
                            <div class="icon-chev-right">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <li class="li-hackathon-day1 collapse my-3" id="hackathon_1st_day_3-collapse">
                <a href="#" class="a-hackathon-meeting">
                    <div class="icon-earmark"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="text-earmark">
                        <h6 class="">Tugas Bukti Record Meeting Kelompok</h6>
                    </div>
                </a>
            </li>

            <!--- | Day 42-44 ~ 2nd Hackathon Day 1-3 | --->
            <a href="#" class="a-btn-hackathon align-items-center collapsed py-2 active" data-bs-toggle="collapse"
                data-bs-target="#hackathon_2nd_day_1-collapse" aria-expanded="true">
                <div class="align-items-center my-3">
                    <div class="col pd-right-col">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="w-100">
                                <h6 class="my-3 fw-bold h6-hackathon">Day 42 - 2nd Hackathon Day 1</h6>
                            </div>
                            <div class="icon-chev-right">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <li class="li-hackathon-day1 collapse my-3" id="hackathon_2nd_day_1-collapse">
                <a href="/dashboard_hackathon-2nd-day1" class="a-hackathon-meeting active">
                    <div class="icon-earmark"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="text-earmark">
                        <h6 class="">Tugas Bukti Record Meeting Kelompok</h6>
                    </div>
                </a>
            </li>

            <a href="#" class="a-btn-hackathon align-items-center collapsed py-2" data-bs-toggle="collapse"
                data-bs-target="#hackathon_2nd_day_2-collapse" aria-expanded="true">
                <div class="align-items-center my-3">
                    <div class="col pd-right-col">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="w-100">
                                <h6 class="my-3 fw-bold h6-hackathon">Day 43 - 2nd Hackathon Day 2</h6>
                            </div>
                            <div class="icon-chev-right">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <li class="li-hackathon-day1 collapse my-3" id="hackathon_2nd_day_2-collapse">
                <a href="/dashboard_hackathon-2nd-day2" class="a-hackathon-meeting">
                    <div class="icon-earmark"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="text-earmark">
                        <h6 class="">Tugas Bukti Record Meeting Kelompok</h6>
                    </div>
                </a>
            </li>
            <a href="#" class="a-btn-hackathon align-items-center collapsed py-2" data-bs-toggle="collapse"
                data-bs-target="#hackathon_2nd_day_3-collapse" aria-expanded="true">
                <div class="align-items-center my-3">
                    <div class="col pd-right-col">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <div class="w-100">
                                <h6 class="my-3 fw-bold h6-hackathon">Day 44 - 2nd Hackathon Day 3</h6>
                            </div>
                            <div class="icon-chev-right">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <li class="li-hackathon-day1 collapse my-3" id="hackathon_2nd_day_3-collapse">
                <a href="/dashboard_hackathon-2nd-day3" class="a-hackathon-meeting">
                    <div class="icon-earmark"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="text-earmark">
                        <h6 class="">Tugas Bukti Record Meeting Kelompok</h6>
                    </div>
                </a>
            </li>
        </div>
    </div>
    <div class="content-hackathon"
        style="background-image: url(img/bg-content.png); background-repeat: no-repeat; background-position-x: 65rem; background-position-y: -2rem; background-size: 20%;">
        <div
            style="display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
            width: 100%;
            font-size: 1.3rem;">
            <div style="display: flex; align-items: center; font-size: 1.3rem;">
                <a href="/dashboard_hackathon-2nd-day3" style="color: black"><i class="chevron left icon"></i></a>
                <a href="/dashboard_hackathon-2nd-day2" style="color: black"><i class="chevron right icon"></i></a>
                <h5 class="h5-day">(2nd) --> Day 1</h5>
                <a type="button" style="color: black; margin-left: 20px;" onclick="openPopupTasks()">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="21" height="21"
                        viewBox="0,0,256,256" style="fill:#000000;">
                        <g fill="#fbb041" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal;">
                            <g transform="scale(5.12,5.12)">
                                <path
                                    d="M25,2c-12.6907,0 -23,10.3093 -23,23c0,12.69071 10.3093,23 23,23c12.69071,0 23,-10.30929 23,-23c0,-12.6907 -10.30929,-23 -23,-23zM25,4c11.60982,0 21,9.39018 21,21c0,11.60982 -9.39018,21 -21,21c-11.60982,0 -21,-9.39018 -21,-21c0,-11.60982 9.39018,-21 21,-21zM24,13v11h-11v2h11v11h2v-11h11v-2h-11v-11z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    {{-- <i class="plus circle icon" style="color: #FBB041"></i> --}}
                    <span style="font-size: 15px">Add Task</span>
                </a>
                <div class="px-2" style="display: flex; flex-direction: row; align-items: center; font-size: 15px;">
                    <div class="mx-3" style=" background-color: #1533B5; width: 13px; height: 13px;"></div>
                    <span>Selesai</span>
                </div>
                <div class="px-2" style="display: flex; flex-direction: row; align-items: center; font-size: 15px;">
                    <div class="mx-3" style=" background-color: #F13C20; width: 13px; height: 13px;"></div>
                    <span>Belum Selesai</span>
                </div>
            </div>
            <div style="display: flex; flex-direction: column; align-items: center;">
                <div class="remaining-time">
                    <p id="countdown" class="countdown">Loading...</p>
                </div>
            </div>
        </div>

        <div class="content-calender">
            <div class="google-calender">
                <script src="js/fetchData.js"></script>
                <div id='calendar'></div>

            </div>
        </div>

        <div style=" margin: 1rem 0 1rem 0; width: 70%; height: 38vh;">
            <div class="container-discussion-uploads">
                <div class="discussion-uploads">
                    <div class="discussion-text">
                        <h3 class="discussions">Discussions</h3>
                    </div>
                    <a type="button" style="color: black; margin-left: 20px; font-size: 15px;"
                        onclick="openPopupDiscussion()">
                        <i class="plus icon" style="color: #1533B5"></i>
                        <span style="font-size: 15px">Add Discussion</span>
                    </a>
                </div>
            </div>
            <div class="space-discussion"></div>
            <div
                style=" display: flex; height: 32vh; width: 100%; flex-direction: column; overflow-y: auto; border: .01px solid black;">
                <div class="card card-body">
                    <div class="list-group list-group-flush">
                        <a href="/dashboard_hackathon-discussions"
                            class="discussion-group-item discussion-group-item-action" data-toggle="collapse">
                            <span class="title">Initial Meeting</span>
                        </a>
                        <a href="#" class="discussion-group-item discussion-group-item-action replies"
                            data-toggle="collapse">
                            <span class="replies">Reply : </span>
                        </a>
                    </div>
                </div>
                <div class="card card-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="discussion-group-item discussion-group-item-action"
                            data-toggle="collapse">
                            <span class="title">Problem A</span>
                        </a>
                        <a href="#" class="discussion-group-item discussion-group-item-action replies"
                            data-toggle="collapse">
                            <span class="replies">Reply : </span>
                        </a>
                    </div>
                </div>
                <div class="card card-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="discussion-group-item discussion-group-item-action"
                            data-toggle="collapse">
                            <span class="title">Problem B</span>
                        </a>
                        <a href="#" class="discussion-group-item discussion-group-item-action replies"
                            data-toggle="collapse">
                            <span class="replies">Reply : </span>
                        </a>
                    </div>
                </div>
                <div class="card card-body">
                    <div class="list-group list-group-flush">
                        <a href="#" class="discussion-group-item discussion-group-item-action"
                            data-toggle="collapse">
                            <span class="title">Problem C</span>
                        </a>
                        <a href="#" class="discussion-group-item discussion-group-item-action replies"
                            data-toggle="collapse">
                            <span class="replies">Reply : </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-member card" id="listMemberCard">
            <div class="card-body">
                <div style=" display: flex; justify-content: space-between; margin-bottom: 1rem;">
                    <h3 class="card-title-list">List Anggota</h3>
                    <a type="button" class="card-link" id="toggleMember">Lihat Semua</a>
                </div>
                <div class="member-list" id="MemberList" style="display: flex; max-height: 107px; overflow-y:auto">
                    <!-- Gambar profil anggota -->
                    @foreach ($members as $member)
                        <div class="member-profile" style="margin-right: .5rem;">
                            <img src="{{ $member->profile_picture }}" alt="Profil {{ $member->name }}">
                            <span class="member-name" style="display: none">{{ $member->name }}</span>
                        </div>
                    @endforeach
                    <!-- Tambahkan gambar profil lainnya sesuai kebutuhan -->
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Menambahkan Discussion -->
    <div class="popup-discussion" id="popup-discussion">
        <div class="overlay" id="overlay" onclick="closePopupDiscussion()"></div>
        <div class="discussion" id="discussion">
            <div class="card card-member-list">
                <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-around;">
                    <form class="taskForm" action="" method="">
                        @csrf
                        <div class="list-group list-group-flush">
                            <div class="titlelist-icon">
                                <div class="class-title-list-discussion">
                                    <h5 class="title-list-discussion" id="popupdiscussionTitle">Discussion</h5>
                                </div>
                                <div>
                                    <!--- | Icon Untuk menambahkan Task | --->
                                    <a type="button" id="close-icon-discussion" style="margin-right: 1rem"
                                        onclick="closePopupDiscussion()">
                                        <i class="close icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="div-listgroup">
                                <li class="list-group-item">
                                    <span class="label-topik">Nama Topik</span>
                                    <input class="input-list task-input" type="text" name="nama_topik"
                                        id="nama_topik">
                                </li>
                                <li class="list-group-item">
                                    <span class="label label-deskripsi">Deskripsi</span>
                                    <textarea class="input-list task-input" name="deskripsi" id="deskripsi" cols="30" rows="10"
                                        style="resize: none"></textarea>
                                </li>
                            </div>
                        </div>
                        <div class="btn-create-list">
                            <button class=" ui primary button btn-create" id="createBtn">Buat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup Menambahkan Task -->
    <div class="popup-tasks" id="popup-tasks">
        <div class="overlay" id="overlay" onclick="closePopupTasks()"></div>
        <div class="tasks" id="tasks">
            <div class="card card-member-list">
                <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-around;">
                    <form class="taskForm" action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="task_id" id="taskId">
                        <div class="list-group list-group-flush">
                            <div class="titlelist-icon">
                                <div class="class-title-list">
                                    <h5 class="title-list" id="popupTitle">Tugas</h5>
                                </div>
                                <div>
                                    <!--- | Icon Untuk Event Klik Calender | --->
                                    <a type="button" id="delete-icon" style="display: none; margin-right: 1rem">
                                        <i class="trash alternate outline icon"></i>
                                    </a>
                                    <a type="button" id="back-arrow-circle" style="margin-right: 1rem; display: none"
                                        onclick="backToPopupTaskEvent()">
                                        <i class="arrow circle left icon"></i>
                                    </a>
                                    @foreach ($tasks as $task)
                                        <a type="button" id="edit-icon" data-task-id="{{ $task->id }}"
                                            onclick="toggleEditMode(this)" style="display:none; margin-right: 1rem">
                                            <i class="edit icon" style=""></i>
                                        </a>
                                    @endforeach

                                    <a type="button" id="close-icon-event" onclick="closePopupTasksEvent()"
                                        style="display: none; margin-right: 1rem">
                                        <i class="close icon"></i>
                                    </a>
                                    <a type="button" id="close-icon" style="margin-right: 1rem"
                                        onclick="closePopupTasks()">
                                        <i class="close icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="div-listgroup">
                                <li class="list-group-item">
                                    <label class="label-tugas">Nama Tugas</label>
                                    <span class="task-display" id="taskNameDisplay" style="display: none"></span>
                                    <input class="input-list task-input" type="text" name="name" id="taskName">
                                </li>
                                <li class="list-group-item">
                                    <label class="label label-start">Start</label>
                                    <span class="task-display" id="taskStartDisplay" style="display: none"></span>
                                    <input class="input-list task-input" type="datetime-local" name="start"
                                        id="taskStart">
                                </li>
                                <li class="list-group-item">
                                    <label class="label label-finish">Finish</label>
                                    <span class="task-display" id="taskFinishDisplay" style="display: none"></span>
                                    <input class="input-list task-input" type="datetime-local" name="finish"
                                        id="taskFinish">
                                </li>

                                <li class="list-group-item">
                                    <label class="label label-person">Person</label>
                                    <span class="task-display" id="taskPersonDisplay" style="display: none"></span>

                                    <div id="div-taskPerson"
                                        style="display: flex; flex-direction: column; overflow-y: auto; height: 75px; width: 175px; background-color: aliceblue; padding: 5px;">
                                        @foreach ($members as $member)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $member->name }}" id="taskPerson" name="person[]">
                                                <label class="form-check-label" for="member{{ $member->id }}">
                                                    {{ $member->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <label class="label label-detail">Detail</label>
                                    <span class="task-display" id="taskDetailDisplay" style="display: none"></span>
                                    <textarea name="detail" id="taskDetail" class="input-list task-input" cols="30" rows="10"
                                        style="resize: none; height: 5rem;"></textarea>
                                </li>
                            </div>
                        </div>
                        <div class="btn-submit-list">
                            <button class=" ui primary button btn-submit" id="submitBtn">Submit</button>
                            <button class=" ui primary button btn-save" id="saveBtn" style="display:none;">
                                Save Changes</button>
                            <button class=" ui primary button btn-finish" id="finishBtn"
                                style="display:none; margin-top: 105px">Selesai</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bataswaktu.js"></script>
@endsection
