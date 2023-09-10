@extends('all')

@section('css')
<style>
    .card-container{
        margin-top: 2rem;
    }
td{
    vertical-align: middle;
}

.card-header{
    display: flex;
    justify-content: space-between;
}

.card-titled{
    font-weight: bold;
    font-size: 25px;
}

.invite{
    background-color: black;
    color: white;
}

.invite:hover{
    background-color: blue;
    color: white;
}

.table{
    margin-top: 1rem;
}

</style>
@endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="tt">
            <span class="content-title"></span>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Main</a>
                </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">User</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Role</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <div class="card-container">
            <div class="card">
                <div class="card-header">
                    <div class="card-titled">Teachers</div>
                    <div class="button-container">
                        <button class="btn invite" type="button" data-bs-toggle="modal" data-bs-target="#inviteTeacherModal"">Invite Teachers</button>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($teachers as $teacher)
                        
                            <li>{{ $teacher->id }}</li>
                        @endforeach
                    </ul>
                    <table>
                        <tr>
                            <td>Pic</td>
                            <td>Chin</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-titled">Students (205)</div>
                    <div class="button-container">
                        <button class="btn invite" type="button" data-bs-toggle="modal" data-bs-target="#inviteStudentModal">Invite Student</button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input class="form-control" type="search" value="" placeholder="Search..." style="outline: none;"/>
                            <button class="btn btn-outline-primary" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Img</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Available</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img class="img-profile rounded-circle" style="max-width: 48px; max-height: 48px" src="https://media.gametora.com/umamusume/characters/profile/1067.png">
                            </td>
                            <td>Chin Chee Onn</td>
                            <td>chinco-wm20@student.tarc.edu.my</td>
                            <td>Student</td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img class="img-profile rounded-circle" style="max-width: 48px; max-height: 48px" src="https://media.gametora.com/umamusume/characters/profile/1067.png">
                            </td>
                            <td>Chin Chee Onn</td>
                            <td>chinco-wm20@student.tarc.edu.my</td>
                            <td>Student</td>
                            <td>Yes</td>
                        </tr>
                    </table>
                </div>
            </div>

<!-- Invite Teacher Full Screen Modal -->
<div class="modal fade" id="inviteTeacherModal" tabindex="-1" aria-labelledby="inviteTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteTeacherModalLabel">Invite Teachers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input class="form-control" type="search" value="" placeholder="Search..." style="outline: none;" />
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                
                <table class="table table-bordered">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><img src="https://media.gametora.com/umamusume/characters/profile/1067.png" class="img-thumbnail rounded-circle" width="40" height="40" alt="..."></td>
                        <td>Chin Chee Onn</td>
                        <td>22WMR05523</td>
                        <td>chinco-wm20@student.tarc.edu.my</td>
                        <td>Active</td>
                        <td>
                            <button class="btn btn-primary" type="btn">Invite</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Invite Student Full Screen Modal -->
<div class="modal fade" id="inviteStudentModal" tabindex="-1" aria-labelledby="inviteStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteStudentModalLabel">Invite Students</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                    <input class="form-control" type="search" value="" placeholder="Search..." style="outline: none;" />
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                
                <table class="table table-bordered">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Student ID</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><img src="https://media.gametora.com/umamusume/characters/profile/1067.png" class="img-thumbnail rounded-circle" width="40" height="40" alt="..."></td>
                        <td>Chin Chee Onn</td>
                        <td>22WMR05523</td>
                        <td>chinco-wm20@student.tarc.edu.my</td>
                        <td>Active</td>
                        <td>
                            <button class="btn btn-primary" type="btn">Invite</button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


        </div>
    <div class="main-content">
</div>
@endsection