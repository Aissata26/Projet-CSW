<?php 
function connexion (): void 
{
       echo ' <div class="modal fade  " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content background--blanc-crem border-0  text-center">
                    <div class="modal-header border-0">    
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row text-center">
                        <h1 class="text-color-bleufoncé fs-2">Connexion</h1>
                    </div>
                    <div class="row text-center">
                        <p class="text-couleur-blanc-creme">Connectez-vous à votre compte</p>
                    </div>
                    <div class="modal-body">
                        <form class="justify-content-center">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre@email.com">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                            </div>
                            <div class="text-end">
                                <a href="#" >Mot de passe oublié?</a>
                            </div>
                            <button type="bouton" class="btn btn-primary">Connexion</button></div>
                        </form>
                        <div class="text-center text-light border-top p-3">
                            <p class="">Pas encore de compte ? <a href="#">Créer un compte</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>';
}
?>