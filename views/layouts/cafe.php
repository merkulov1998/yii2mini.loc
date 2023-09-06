<?php

use app\assets\AppAsset;

AppAsset::register($this);
 ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue</title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="container" id="app">
    <div class="card">
        <h1 :style="{
            color: inputValue.length < 5 ? 'darkred' : 'darkblue',
            fontSize: inputValue.length < 6 ? '2rem' : '1.5rem'
        }">{{title}}</h1>
        <div class="form-control">
            <input type="text" :placeholder="placeholderString"
                                v-model="inputValue"
                               @keypress.enter="addNewNote"
                                />
        </div>
        <button class="btn" @click="addNewNote">Добавить</button>
        <hr />
        <ul class="list" v-if="notes.length !== 0">
            <li class="list-item" v-for = "(note, idx) in notes">
               <span :class="note.length > 5 ? 'primary' : 'bold'">({{idx + 1}}){{toUpperCase(note)}}</span>
                <button class="btn danger" @click="removeNote(idx)">Удалить</button>
            </li>
            <hr/>
            <li>
               <strong>Общее количество: {{notes.length}}</strong> | Удвоенное: {{doubleCountComputed}}
            </li>
        </ul>
        <div v-else="notes.length === 0">Заметок пока нет. Добавьте первую</div>
    </div>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>