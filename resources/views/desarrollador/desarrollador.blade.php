@extends('template.plantillab')
@section('p')

                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Desarrollador</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="{{url('home')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</a>
                                <span class="breadcrumb-item active">Desarrolladores</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            @if (session("mensaje"))
                            <div class="notification-toast top-right" id="notification-toast" data-delay="3000">
                                <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="alert alert-success m-b-0">
                                        <button type="button" class="ml-2 close" data-dismiss="toast"
                                                aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="d-flex justify-content-start">
                                        <span class="alert-icon m-r-20 font-size-30">
                                            <i class="anticon anticon-check-circle text-success"></i>
                                        </span>
                                            <div class="m-t-10">
                                                <p>{{ session("mensaje") }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endif
                                
                            <h4>Desarrollador</h4>
                            <a href="{{url('desarrolladores/create')}}"><button class="btn btn-danger">Nuevo Desarrollador</button></a>
                            <div class="m-t-25">
                             


                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Desarrollador</th>
                                            <th>Editar Desarrollador</th>
                                            <th>Eliminar Desarrollador</th>

                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($desa as $d)
                                        
                                        
                                    
                                       



                                        <tr>
                                            <td>{{$d->idDesarollador}}</td>
                                            

                                            <td>{{$d->nomb_desa}}</td>

                                            <td><a class="btn btn-danger" href="{{url('desarrolladores/'.$d->idDesarollador.'/edit')}}"
                                                title="Modificar"><i class="anticon anticon-edit"></i></a></td>

                                            <form action="{{route('desarrolladores.delete', $d->idDesarollador)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <td><button type="submit" style="background-color:transparent; border-color:transparent"><a class="btn btn-btn btn-danger" style="color:white"
                                                title="Eliminar" onclick="
                                                return confirm('Estas seguro de borrar este desarollador?')"><i class="anticon anticon-delete"></i></button></td>
                                            </form>

                                           

                                     

                                        </tr>
                                        @endforeach
                                       
                                        
                                    
                                    

                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Desarrollador</th>
                                            <th>Editar Desarrollador</th>
                                            <th>Eliminar Desarrollador</th>

                                        </tr>
                                    </tfoot>
                                </table>
                              
                            </div>
                            <div class="">
                                <pre><code class=""></code></pre>
                            </div>
                            <div class="">
                                <pre><code class=""><script type="text/plain">
   
</script></code></pre>
                            </div>
                            <div class="code-example">
                                <pre><code class=""><script type="text/plain">$('#data-table').DataTable();</script></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                @endsection