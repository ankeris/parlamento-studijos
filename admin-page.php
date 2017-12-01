<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>


    <h4>Pridėti straipsnį</h4>
<div id="app">

    <form action="php/add_article.php" method="post" style="border: 1px solid black; margin: 10px;">
        Viršelio iliustracija:
        <input type="file" name="upload" value="įkelti">
        <br>
        
        
        Įžanga:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_exordium">+</button>

            <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in exordium">
                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>
                
                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="izanga">
                
                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
            </section>
        <br>

        
        Istorija:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_history">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in history">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="istorija">

                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>
         
        Politika:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_politics">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in politics">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="politika">


                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>
        
        Teisė:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_law">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in law">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="teise">

                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Kalba:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_language">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in language">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="kalba">
                
                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Komunikacija:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_communication">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in communication">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="komunikacija">

                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Recenzijos ir vertinimai:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_reviews">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in reviews">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="recenzijos">

                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Komentarai:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_comments">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in comments">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="komentarai">

               
                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Bibliografija:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_bibliography">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in bibliography">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="bibliografija">


                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Įvykių kalendorius:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_calender">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in calender">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="kalendorius">


                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>

        Informacinės technologijos:
        <button type="button" id="addBtn-izanga" @click="addNewArticleForm_it">+</button>
        <br>
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in it">

                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input" v-model="data.author">
                <br>

                <label>Straipsnio pavadinimas:</label><br>
                <textarea name="article_name[]" class="form-input" v-model="data.title"></textarea>
                <br>

                <label>PDF:</label>
                <input type="file" name="pdf_file[]" class="form-input">
                <!-- hidden value to identify topic -->
                <input type="hidden" name="topic[]" class="form-input" value="informacinestechnologijos">



                <button type="button" class="removeBtn" @click="removeForm(data)">Trinti</button>
                
        </section>
        <br>
        
        <button type="submit">Publikuoti</button>
    </form>

</div>




<script src="https://unpkg.com/vue"></script>
<script>
    

    
const app = new Vue({
    el: "#app",
    data: {
        exordium: [{
            author: '',
            title: '',
            data: 'izanga'
        }],
        history: [{
            author: '',
            title: '',
            data: 'istorija'
        }],
        politics: [{
            author: '',
            title: '',
            data: 'politika'
        }],
        law: [{
            author: '',
            title: '',
            data: 'teise'
        }],
        language: [{
            author: '',
            title: '',
            data: 'kalba'
        }],
        communication: [{
            author: '',
            title: '',
            data: 'komunikacija'
        }],
        reviews: [{
            author: '',
            title: '',
            data: 'recenzijos'
        }],
        comments: [{
            author: '',
            title: '',
            data: 'komentarai'
        }],
        bibliography: [{
            author: '',
            title: '',
            data: 'bibliografija'
        }],
        calender: [{
            author: '',
            title: '',
            data: 'kalendorius'
        }],
        it: [{
            author: '',
            title: '',
            data: 'informacinestechnologijos'
        }]
    },
    methods: {
        addNewArticleForm_exordium () {
            this.exordium.push({
                name: '',
                title: '',
                data: 'izanga'
            })
        },
        addNewArticleForm_history () {
            this.history.push({
                name: '',
                title: '',
                data: 'istorija'
            })
        },
        addNewArticleForm_politics () {
            this.politics.push({
                name: '',
                title: '',
                data: 'politika'
            })
        },
        addNewArticleForm_law () {
            this.law.push({
                name: '',
                title: '',
                data: 'teise'
            })
        },
        addNewArticleForm_language () {
            this.language.push({
                name: '',
                title: '',
                data: 'kalba'
            })
        },
        addNewArticleForm_communication () {
            this.communication.push({
                name: '',
                title: '',
                data: 'komunikacija'
            })
        },
        addNewArticleForm_reviews () {
            this.reviews.push({
                name: '',
                title: '',
                data: 'recenzijos'
            })
        },
        addNewArticleForm_comments () {
            this.comments.push({
                name: '',
                title: '',
                data: 'komentarai'
            })
        },
        addNewArticleForm_bibliography () {
            this.bibliography.push({
                name: '',
                title: '',
                data: 'bibliografija'
            })
        },
        addNewArticleForm_calender () {
            this.calender.push({
                name: '',
                title: '',
                data: 'kalendorius'
            })
        },
        addNewArticleForm_it () {
            this.it.push({
                name: '',
                title: '',
                data: 'informacinestechnologijos'
            })
        },
        removeForm (data) {
           this.exordium.splice(this.exordium.indexOf(data), 1)
            console.log(this.exordium.indexOf(data));
        }
    }
})


</script>


















<!--
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/jquery/dist/jquery.multifield.min.js"></script>
-->
<!--
<script>
$('.izanga').multifield({
	section: '.form-content',
	btnAdd:'#addBtn',
	btnRemove:'.removeBtn',
});
    
</script>-->
