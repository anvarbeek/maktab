<?php 
include "header.php";


?>
<div class="conteiner">
        <div class="row">
            <div class="col d-flex justify-content-center mt-5">
                <div class="card shadow-lg  bg-light">
                    <div class="card-head col-sm">
                        <a type="button" class="btn close d-flex justify-content-end" href="index.php" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h1 class="text-primary fonnt">Uz<span class="text-muted ">Coder</span></h1>
                        <h3 class="text-secondary d-flex justify-content-center">Sign up to UzCoder</h3>
                        <p class="col-sm text-secondary m-2 d-flex justify-content-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vel.</p>
                    </div>
                    <form action="password.php" method="post">
                        <div class="form-group card-body col-sm ">
                            <div class="form-control mt-3 ">
                                <div class="mt-3">
                                    <label for="" class="form-label"> New Password:</label>
                                    <input type="text" class="form-control">
                                </div>
                                
                            </div>
                            <div class="form-control mt-3">
                                <div class="mt-3">
                                    <label for="" class="form-label col-sm">Confirm password:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success w-100 mt-4 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

