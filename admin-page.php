<?php include 'includes/header.php' ?>
<?php include 'includes/pdo-conn.php' ?>


    <h4>Pridėti straipsnį</h4>

<div id="app">

    <form action="php/add_article.php" method="POST" enctype="multipart/form-data" style="border: 1px solid black; margin: 10px;">
        Viršelio iliustracija:
        <input type="hidden" name="size" value="1000000">
        <input type="file" name="image">
        
        <br><br>
        
        
        Įžanga:
            <button type="button" id="addBtn-izanga" @click="addNewArticleForm_exordium">+</button>
            <br>
        
            <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.exordium">
                {{index}}<h3>{{data.author}}</h3><h4>{{data.title}}</h4>
                <label>Autorius (vardas, pavardė)</label><br>
                <input type="text" id="name" name="author_name[]" class="form-input"
                v-model="data.author">
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

            <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.history">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.politics">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.law">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.language">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.communication">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.reviews">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.comments">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.bibliography">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.calender">

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
           
        <section class="form-content" style="border: 1px solid black; margin: 5px;" v-for="(data, index) in articles.it">

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
        
        <!--  <input type="hidden" name="publication_number" value="">  -->
        
        <button type="submit" name="upload">Publikuoti</button>
        
    </form>
                <h2>Peržiūra</h2>
                <!--    Loop inside loop        -->
                <p>Įžangoje:</p>
                <section id="preview" v-for="detail in articles.exordium">
                {{detail.author}} - 
                {{detail.title}}
                </section>
                
                <p>Istorija:</p>
                <section id="preview" v-for="detail in articles.history">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Politika:</p>
                <section id="preview" v-for="detail in articles.politics">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Teisė:</p>
                <section id="preview" v-for="detail in articles.law">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Kalba:</p>
                <section id="preview" v-for="detail in articles.language">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Komunikacija:</p>
                <section id="preview" v-for="detail in articles.communication">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Recenzijos ir vertinimai:</p>
                <section id="preview" v-for="detail in articles.reviews">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Komentarai:</p>
                <section id="preview" v-for="detail in articles.comments">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Bibliografija:</p>
                <section id="preview" v-for="detail in articles.bibliography">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Įvykių kalendorius:</p>
                <section id="preview" v-for="detail in articles.calender">
                {{detail.author}}
                {{detail.title}}
                </section>
                
                <p>Informacinės technologijos:</p>
                <section id="preview" v-for="detail in articles.it">
                {{detail.author}}
                {{detail.title}}
                </section>
</div>




<script src="https://unpkg.com/vue"></script>
<script>
    
    
const app = new Vue({
    el: "#app",
    data: {
        articles: {
            
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
    },
    methods: {
        addNewArticleForm_exordium () {
            this.articles.exordium.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_history () {
            this.articles.history.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_politics () {
            this.articles.politics.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_law () {
            this.articles.law.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_language () {
            this.articles.language.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_communication () {
            this.articles.communication.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_reviews () {
            this.articles.reviews.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_comments () {
            this.articles.comments.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_bibliography () {
            this.articles.bibliography.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_calender () {
            this.articles.calender.push({
                author: '',
                title: '',
                show: true
            })
        },
        addNewArticleForm_it () {
            this.articles.it.push({
                author: '',
                title: '',
                show: true
            })
        },
        removeForm_exordium (data) {
           this.articles.exordium.splice(this.articles.exordium.indexOf(data), 1)
            console.log(this.exordium.indexOf(data));
        },
        removeForm_history (data) {
           this.articles.history.splice(this.articles.history.indexOf(data), 1)
            console.log(this.history.indexOf(data));
        },
        removeForm_politics (data) {
           this.articles.politics.splice(this.articles.politics.indexOf(data), 1)
            console.log(this.politics.indexOf(data));
        },
        removeForm_law (data) {
           this.articles.law.splice(this.articles.law.indexOf(data), 1)
            console.log(this.law.indexOf(data));
        },
        removeForm_language (data) {
           this.articles.language.splice(this.articles.language.indexOf(data), 1)
            console.log(this.language.indexOf(data));
        },
        removeForm_communication (data) {
           this.articles.communication.splice(this.articles.communication.indexOf(data), 1)
            console.log(this.communication.indexOf(data));
        },
        removeForm_reviews (data) {
           this.articles.reviews.splice(this.articles.reviews.indexOf(data), 1)
            console.log(this.reviews.indexOf(data));
        },
        removeForm_comments (data) {
           this.articles.comments.splice(this.articles.comments.indexOf(data), 1)
            console.log(this.comments.indexOf(data));
        },
        removeForm_bibliography (data) {
           this.articles.bibliography.splice(this.articles.bibliography.indexOf(data), 1)
            console.log(this.bibliography.indexOf(data));
        },
        removeForm_calender (data) {
           this.articles.calender.splice(this.articles.calender.indexOf(data), 1)
            console.log(this.calender.indexOf(data));
        },
        removeForm_it (data) {
           this.articles.it.splice(this.articles.it.indexOf(data), 1)
            console.log(this.it.indexOf(data));
        },
    }
}) 


</script>



       