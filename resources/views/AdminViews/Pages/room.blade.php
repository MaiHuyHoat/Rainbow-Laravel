<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-file-signature"></i>  Room <b>Details</b>      
                            <br><br> <button class="btn btn-primary ">
                        <a href="./room/create" style="color: white"><i class="fa-solid fa-user-plus"></i>  Add new Room</a>    
                        </button></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Room Name <i class="fa fa-sort"></i></th>
                        <th>Belongs to Cinema <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Room)
                 <tr>
                 
                     <td>
                        {{$Room->Id}}
                     </td>
                     
                     <td>
                        {{$Room->Name}}
                     </td>
                     <td>
                        {{$Room->cinema->Name}}
                     </td>
                     <td>
                       
                        <a href="/admin/room/edit/{{$Room->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="/admin/room/delete/{{$Room->Id}}" onclick="confirmDeletion(event,this)" class="detele" title="Delete" data-toggle="tooltip"><i class="material-icons" style="color: red;">&#xE872;</i></a>
                    </td>
           
                 </tr>
                    @endforeach        
                </tbody>
            </table>
            
        </div>
    </div>  
</div>  
</div>  
</div>  
 
 