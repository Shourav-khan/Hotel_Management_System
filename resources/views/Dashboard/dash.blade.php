@extends('Dashboardmaster')
@section('content')

<style>
.hotel{

    color: white;
    font-size: 30px;
    font-weight: bold;
    
}

.bell{
    font-size: 30px;
    margin-top: 5px;
}

.dropdown-toggle{

    border: none; 
    background: none; 
    font-size: 13px;
    
}



</style>



<div class="container-fluid">
    
<div class="row" style="background: #F30000; height: 40px  ">
        <div class="col-12" > 
        <div class="row">
            <div class="hotel col-6 mt-1">  International Hotel </div>
            <div class="col-6">
                <div class="row ">
                    <div class="col-9 text-end">
                        <i class="bell fa-solid fa-bell "></i> 
                    </div>
                    
                    <div class="col-3" >
                        <div class="row">
                            <div class="col-2">
                                <i class="fa-sharp fa-solid fa-user-tie mt-1" style="color: white; font-size: 30px"></i>
                            </div>

                            <div class="col-8">
                                
                                <div class="dropdown" >
                                    <button class=" dropdown-toggle" id="dropdownMenu2"  data-bs-toggle="dropdown" aria-expanded="false" >
                                      Welcome,
                                      <br/>
                                      .MR Admin
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                      <li><button class="dropdown-item" type="button">Action</button></li>
                                    
                                    </ul>
                                  </div>

                            </div>
                        </div>
                        
                        

                    </div>
                    
                    
                </div>
                

            </div>

        </div>
        </div>
    </div>

<div class="row mx-1">
    <div class="card" style="width: 18rem;">
        <div class="card-header">
          Featured
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
        </ul>
      </div>
</div>

</div>



@endsection
