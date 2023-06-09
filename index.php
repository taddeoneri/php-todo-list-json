<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP TO DO LIST</title>
</head>
<body>
    <div id="app">
        <h1 class="text-center my-3">Lista della spesa</h1>
        <div class="container my-4">
            <div class="box">
                <div class="d-flex justify-content-center">
                    <input type="text" name="item" id="item" v-model="newItem" @keyup.enter="newList" >
                    <button @click="newList" class="btn btn-secondary mx-3">Inserisci prodotto</button>
                </div>
                <div class="d-flex flex-column align-items-center my-4 rounded bg-body-secondary">
                    <ul>
                        <li v-for="(item, index) in todoList" :key='index'>
                            {{item}}
                            <!-- <button @click="prodottoComprato(index)" class="btn btn-success m-2"><i class="fa-solid fa-check"></i></button>
                            <button @click="prodottoEliminato(index)" class="btn btn-danger m-2"><i class="fa-solid fa-xmark"></i></button> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>