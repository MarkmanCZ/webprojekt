<?php include 'header.php';?>

<main>
    <div class="container-fluid">
        <div class="p-2 p-md-5 mb-4 bg-dark rounded-3" id="showcase">
            <div class="container py-4 text-light">
                <h1 class="display-5 fw-bold">Ukázka mých zkušeností a funkcí webu</h1>
                <p class="col-md-8 fs-4">Tento web by Vám měl představit mé zkušenosti a funkce, se kterýmy
                se můžete na různých webových aplikacích/rozhraních setkat. Od jedoduchého statického obsahu až po obsah dynamický s uživatelským rozhraním...</p>
                <a href="#" class="btn btn-primary btn-lg" type="button">Více</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 bg-secondary p-3 rounded-2">
                <h2>Nemáte ještě uživatelský účet?</h2>
                <form action="includes/register.inc.php" method="POST">
                    <div class="p-2">
                        <label for="userName" class="form-label">Celé jméno</label>
                        <input type="text" class="form-control" name="userName" id="userName" placeholder="Celé jméno..">
                    </div>
                    <div class="p-2">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Email..">
                    </div>
                    <div class="p-2">
                        <label for="userNick" class="form-label">Přezdívka</label>
                        <input type="text" class="form-control" name="userNick" id="userNick" placeholder="Přezdívka..">
                    </div>
                    <div class="p-2">
                        <label for="userPwd" class="form-label">Heslo</label>
                        <input type="password" class="form-control" name="userPwd" id="userPwd" placeholder="Heslo..">
                    </div>
                    <div class="p-2">
                        <label for="userPwdCheck" class="form-label">Heslo kontrola</label>
                        <input type="password" class="form-control" name="userPwdCheck" id="userPwdCheck" placeholder="Heslo kontrola..">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-2 ms-2">Odeslat</button>
                </form>
            </div>
            <div class="col-md-6 col-12 p-3 bg-light rounded-2">
                <h2>Máte již účet? Přihlaste se...</h2>
                <form action="includes/login.inc.php" method="POST">
                    <div class="p-2">
                        <label for="userLogin" class="form-label">Email/Přezdívka</label>
                        <input type="text" class="form-control" name="userLogin" id="userLogin" placeholder="Email/Přezdívka..">
                    </div>
                    <div class="p-2">
                        <label for="userPwd" class="form-label">Email</label>
                        <input type="password" class="form-control" name="userPwd" id="userPwd" placeholder="Heslo..">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-2 ms-2">Odeslat</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php';?>