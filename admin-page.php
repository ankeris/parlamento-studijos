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
            <br>
        
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
                
                <button id="exordium" type="button" class="removeBtn" @click="removeForm_exordium(data)">Trinti</button>
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

                    <button id="history" type="button" class="removeBtn" @click="removeForm_history(data)">Trinti</button>

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


                <button id="politics" type="button" class="removeBtn" @click="removeForm_politics(data)">Trinti</button>
                
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

                <button id="law" type="button" class="removeBtn" @click="removeForm_law(data)">Trinti</button>
                
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
                
                <button id="language" type="button" class="removeBtn" @click="removeForm_language(data)">Trinti</button>
                
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

                <button id="communication" type="button" class="removeBtn" @click="removeForm_communication(data)">Trinti</button>
                
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

                <button id="reviews" type="button" class="removeBtn" @click="removeForm_reviews(data)">Trinti</button>
                
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

               
                <button id="comments" type="button" class="removeBtn" @click="removeForm_comments(data)">Trinti</button>
                
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


                <button id="bibliography" type="button" class="removeBtn" @click="removeForm_bibliography(data)">Trinti</button>
                
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


                <button id="calender" type="button" class="removeBtn" @click="removeForm_calender(data)">Trinti</button>
                
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

                <button id="it" type="button" class="removeBtn" @click="removeForm_it(data)">Trinti</button>
                
        </section>
        <br>
        
        <button type="submit">Publikuoti</button>
    </form>
                
                
                <section id="preview" v-for="(data, index) in data">
                    <div>{{exordium.name}}</div>
                    
                     
                </section>
</div>




<script src="https://unpkg.com/vue"></script>
<script>
    

    
const app = new Vue({
    el: "#app",
    data: {
        articles: [{
            exordium: [

            ],
            history: [

            ],
            politics: [

            ],
            law: [

            ],
            language: [

            ],
            communication: [

            ],
            reviews: [

            ],
            comments: [

            ],
            bibliography: [

            ],
            calender: [

            ],
            it: [

            ]
        }

        ]

    },
    methods: {
        addNewArticleForm_exordium () {
            this.articles.exordium.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_history () {
            this.articles.history.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_politics () {
            this.articles.politics.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_law () {
            this.articles.law.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_language () {
            this.articles.language.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_communication () {
            this.articles.communication.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_reviews () {
            this.articles.reviews.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_comments () {
            this.articles.comments.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_bibliography () {
            this.articles.bibliography.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_calender () {
            this.articles.calender.push({
                name: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_it () {
            this.articles.it.push({
                name: '',
                title: '',
                show: true
            })
        },
        removeForm_exordium (data) {
           this.exordium.splice(this.exordium.indexOf(data), 1)
            console.log(this.exordium.indexOf(data));
        },
        removeForm_history (data) {
           this.history.splice(this.history.indexOf(data), 1)
            console.log(this.history.indexOf(data));
        },
        removeForm_politics (data) {
           this.politics.splice(this.politics.indexOf(data), 1)
            console.log(this.politics.indexOf(data));
        },
        removeForm_law (data) {
           this.law.splice(this.law.indexOf(data), 1)
            console.log(this.law.indexOf(data));
        },
        removeForm_language (data) {
           this.language.splice(this.language.indexOf(data), 1)
            console.log(this.language.indexOf(data));
        },
        removeForm_communication (data) {
           this.communication.splice(this.communication.indexOf(data), 1)
            console.log(this.communication.indexOf(data));
        },
        removeForm_reviews (data) {
           this.reviews.splice(this.reviews.indexOf(data), 1)
            console.log(this.reviews.indexOf(data));
        },
        removeForm_comments (data) {
           this.comments.splice(this.comments.indexOf(data), 1)
            console.log(this.comments.indexOf(data));
        },
        removeForm_bibliography (data) {
           this.bibliography.splice(this.bibliography.indexOf(data), 1)
            console.log(this.bibliography.indexOf(data));
        },
        removeForm_calender (data) {
           this.calender.splice(this.calender.indexOf(data), 1)
            console.log(this.calender.indexOf(data));
        },
        removeForm_it (data) {
           this.it.splice(this.it.indexOf(data), 1)
            console.log(this.it.indexOf(data));
        },
    }
})


</script>


<!--
        removeForm (event, data) {
        let targetId = event.currentTarget.id;
        let target = window[targetId];         
        console.log(target);
          
        this.targetId.splice(this.targetId.indexOf(data), 1);
       }
-->










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
