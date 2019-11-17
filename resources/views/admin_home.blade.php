<!DOCTYPE html>
<html lang="en">
@guest
<p>Maaf, Anda tidak punya akses.</p>
@else

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Web Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    
    <script type="text/javascript">
        $(document).ready(function () {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function () {
                if (this.checked) {
                    checkbox.each(function () {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function () {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function () {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>Post</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Add New Post</span></a>
                        <a href="{{ route('logout') }}" class="btn btn-danger" data-toggle="modal" href="{{ route('logout') }}" 
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="material-icons">&#xE15C;</i> 
                            <span>{{ __('Logout') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Catergory</th>
                        <th>Title</th>
                        <th>Picture</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                        @foreach ($blogs as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{$item -> category}}</td>
                                <td>{{$item -> title}}</td>
                                <td><img style="height:50px" src="{{$item -> gambar}}" alt=""></td>
                                
                                <td>                                                                                        
                                    <a href="#editEmployeeModal" 
                                            onclick="dataToEdit('{{$item -> category}}|{{$item -> title}}|{{$item -> gambar}}|{{$item -> content}}|{{$item -> id}}')" 
                                            class="edit" data-toggle="modal"><i class="material-icons"
                                            data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a href="#deleteEmployeeModal" onclick="idToDelete({{$item -> id}})" class="delete" data-toggle="modal"><i class="material-icons"
                                            data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Add Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog" style="width:100% !important;">
            <div class="modal-content">
                <form action="/admin" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Post</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="text" name="gambar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" id="editor2" class="form-control"></textarea>
                            {{-- <textarea name="content"  class="form-control" required></textarea> --}}
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Add">
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="editForm" action="" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Post</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="text" name="gambar" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" id="editor" class="form-control"></textarea>
                        </div>
                    </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-info" value="Save">
                        <input type="hidden" name="_method" value="PUT">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

            <form class="deleteForm" action="" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Post</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        {{-- <input type="submit" class="btn btn-danger" value="Delete"> --}}
                        <input type="submit" class="btn btn-danger" name="delete" value="DELETE">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
@endguest
</html>

<script>
    function dataToEdit(data) {
        alert( "hello" + data )
        var temp = data.split('|');
        console.log(temp);
        
        $("[name='category']").eq(1).attr("value", temp[0]);
        $("[name='title']").eq(1).attr("value", temp[1]);
        $("[name='gambar']").eq(1).attr("value", temp[2])
        $("[name='content']").eq(1).html(temp[3]);;

        $(".editForm").attr("action", "/blog/" + temp[8]);
    }

    function idToDelete(id) {
        $(".deleteForm").attr("action", "/admin/"+id);
    }

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

    ClassicEditor
    .create( document.querySelector( '#editor2' ) )
    .catch( error => {
        console.error( error );
    } );

</script>