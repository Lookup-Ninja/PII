<?php
require 'instances.php';
?>
<!doctype html>
    <html lang="en">
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Lookup Ninja Public Instances Index</title>
    </head>
    <body class="d-flex flex-column min-vh-100">

        <main class="flex-shrink-0">

            <div class="bg-light">
                
                <div class="container pt-3 pb-3">
            
                    <div class="row">

                        <div class="col-lg my-auto">

                            <h1 class="mb-0">Lookup Ninja Public Instances Index</h1>
                            <p class="mt-0 text-muted">Provided by Lookup Ninja's Development Team</p>

                            <h4 class="text-muted"><?= count($instances) ?> Instance<?php if(count($istances) > 1){ echo 's';} ?> Online</h4>

                        </div>

                        <div class="col-auto my-auto">

                            <img src="https://raw.githubusercontent.com/Lookup-Ninja/LookupNinja/main/site/logo_fpg.png" class="img-fluid" style="height:10rem">

                        </div>

                    </div>

                </div>

            </div>

            <hr class="mt-0 mb-0" style="width:100%;height:0.1rem;background-color:#08e1ae;background-image:linear-gradient(315deg, #08e1ae 0%, #98de5b 74%);">


            <div class="container-fluid mb-3 mt-3">

                <table class="table table-striped">
                    <thead class="bg-dark text-light">
                      <tr>
                        <th scope="col">Instance</th>
                        <th scope="col">Version</th>
                        <th scope="col">Country</th>
                        <th scope="col">Network</th>
                        <th scope="col">SSL?</th>
                        <th scope="col">IPv4?</th>
                        <th scope="col">IPv6?</th>
                      </tr>
                    </thead>
                    <tbody>
<?php
foreach($instances as $instance){
?>
                      <tr>
                        <th scope="row"><a href="http://<?= $instance[0] ?>"><?= $instance[0] ?></a></th>
                        <td><?= $instance[1] ?></td>
                        <td><?= $instance[2] ?></td>
                        <td><?= $instance[3] ?></td>
                        <td><?php if($instance[4] === TRUE){ echo '<i class="bi bi-check2-circle"></i>'; } else { echo '<i class="bi bi-x-circle"></i>'; } ?></td>
                        <td><?php if($instance[5] === TRUE){ echo '<i class="bi bi-check2-circle"></i>'; } else { echo '<i class="bi bi-x-circle"></i>'; } ?></td>
                        <td><?php if($instance[6] === TRUE){ echo '<i class="bi bi-check2-circle"></i>'; } else { echo '<i class="bi bi-x-circle"></i>'; } ?></td>
                      </tr>
<?php
}
?>
                    </tbody>
                  </table>

            </div>
        
        </main>

        <footer class="mt-auto bg-light text-center">

            <hr class="mt-0 mb-0" style="width:100%;height:0.1rem;background-color: #6b0f1a;background-image: linear-gradient(315deg, #6b0f1a 0%, #b91372 74%);">

            <div class="container py-5">

                <p class="mb-0"><a href="https://github.com/Lookup-Ninja/PII/blob/main/CONTRIBUTE.md">Submit your Instance</a> <span class="text-muted">&bull;</span> <a href="mailto:js@eml.pm?subject=Incorrect%20Information%20on%20lookup.ninja&body=Hi%20there%2C%0D%0A%0D%0AI'd%20like%20to%20report%20that%20...%20instance%2C%20as%20listed%20on%20lookup.ninja%2C%20is%20incorrect%2C%20because%20...">Report Incorrect Information</a> <span class="text-muted">&bull;</span> <a href="https://github.com/Lookup-Ninja/PII">Source Code</a></p>
                
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
