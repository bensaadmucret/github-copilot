<!--**********************************
            Content body start
        ***********************************-->

      
  
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des agents</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th>Date de naissance</th>
                                                <th>Code</th>
                                                <th>Natiolanité</th>
                                                <th>Spécialité</th>                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   foreach($agents as $agent): ?>
                                            <tr>
                                                <td></td>
                                               
                                                <td><?php echo $agent['nom'] ?? '';?></td>
                                                <td><?php echo $agent['prenom'] ?? '';?></td>
                                                <td><?php echo dateFormate($agent['date_naissance']) ?? '';?></td>
                                                <td><?php echo $agent['code_identification'] ?? '';?></td>
                                                <td><a href="javascript:void(0);"><strong><?php echo $agent['nationalite'] ?? '';?></strong></a></td>
                                                <td><a href="javascript:void(0);"><strong><?php echo $agent['specialite'] ?? '';?></strong></a></td>                                               
                                                <td>
													<div class="d-flex">   
                                                    <form action="agent-edit/<?php echo $agent['id'] ?? '';?>" method="POST">
                                                        <input  name="id" type="hidden" value="<?php echo $agent['id'] ?? '';?>">
                                                        <input type="submit" class="btn btn-primary shadow btn-xs sharp mr-1"  value="Edit" >                                           
                                                    
                                                    </form>
                                                    <form class="agent-delete" action="agent-delete/<?php echo $agent['id'] ?? '';?>" method="POST">
                                                      
                                                        <input  class="btn btn-danger btn-xs sharp" name="id" type="hidden" value="<?php echo $agent['id'] ?? '';?>">
                                                        <input  class="btn btn-danger  btn-xs sharp" type="submit"   value="Sup" >
                                                    
                                                    </form>
                                                    
                                              
												
													</div>												
												</td>												
                                            </tr>
                                            <?php endforeach; ?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                                        
			
			
                    <script>
                        const form = document.querySelector('.agent-delete');
                        form.addEventListener('click', function (e) {                       
                            e.preventDefault();                          
                           
                            Swal.fire({
                                title: 'Vous êtes sûr?',
                                text: "Vous ne pourrez pas revenir en arrière!",
                                type: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Oui, supprimer!'
                            }).then((result) => {
                                if (result.value) {
                                    document.querySelector('.agent-delete').submit();
                                }
                            })
                        
                      
                    });
                        
                    </script>
			
      
   


<!--**********************************
            Content body end
        ***********************************-->