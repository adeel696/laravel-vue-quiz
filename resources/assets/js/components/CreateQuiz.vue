<template>
    <div class='row'> 
		<div class='row'> 
			<router-link :to="{ name: 'Quiz' }" class="btn btn-default">Back</router-link> 
			<br />
		</div>
		<div class="col-md-6 mb-6">
			<form action="#" @submit.prevent="createQuiz()">
				<div clss="row">
					 <div class="col-md-12 mb-12">
						<div class="card">
							<div class="card-body">
								<h2 class="text-center default-text py-3">Add Quiz</h2>
								<div class="md-form">
									<textarea v-model="quiz.Question" type="text" name="Question"  class="md-textarea" style="height: 100px" placeholder="Question">Quaetion a</textarea>
								</div>
								<div class="md-form">
									<input v-model="quiz.Option1" type="text" name="Option1" class="form-control" placeholder="Option 1" value="aa">
								</div>
								<div class="md-form">
									<input v-model="quiz.Option2" type="text" name="Option2" class="form-control" placeholder="Option 2" value="aa">
								</div>
								<div class="md-form">
									<input v-model="quiz.Option3" type="text" name="Option3" class="form-control" placeholder="Option 3" value="aa">
								</div>
								<div class="md-form">
									<input v-model="quiz.Option4" type="text" name="Option4" class="form-control" placeholder="Option 4" value="aa">
								</div>
								<div class="md-form">
									<select class="mdb-select colorful-select dropdown-info form-control" name="Answer">
									  <option value="" disabled selected>Select correct answer</option>
									  <option v-for="(item, index) in answer" :value="item.Option">
									  Option {{index+1}}
									  </option>
									</select> 
								</div>
								
								<div class="text-center">
									<button type="submit" class="btn btn-info btn-lg">New Quiz</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>   
		</div>
		<div class="col-md-6 mb-6">    
			<div clss="row">
				<div class="col-md-12 mb-12 card indigo form-white">
					<h2 class="text-center default-text py-3">Quizzes</h2>
					<ul class="list-group">
						<li v-if='list.length === 0'>There are no quiz yet!</li>
						<li class="list-group-item" v-for="(quiz, index) in list">
							 {{ quiz.Question }}
						<br>A.
							 {{ quiz.Option1 }}
						<br>B.
							 {{ quiz.Option2 }}
						<br>C.
							 {{ quiz.Option3 }}
						<br>D.
							 {{ quiz.Option4 }}
						<br>Answer:
							 {{ quiz.Answer }}
			
							 <button @click="deleteQuiz(quiz.id)" class="btn btn-danger btn-xs pull-right" style="margin-top: -100px;">Delete</button>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    export default {
        data() {
            return {
                list: [],
				answer: [{ Option: 'A' },{ Option: 'B' },{ Option: 'C' },{ Option: 'D' }],
                quiz: {
                    id: '',
                    Question: '',
					Option1: '',
					Option2: '',
					Option3: '',
					Option4: '',
					Answer: ''
                }
            };
        },
        
        created() {
            this.fetchQuizList();
        },
        
        methods: {
            fetchQuizList() {
                axios.get('api/quiz').then((res) => {
                    this.list = res.data;
                });
            },
 	
            createQuiz() {
                axios.post('api/quiz', this.quiz)
                    .then((res) => {
                        this.quiz.Question = '';
						this.quiz.Option1 = '';
						this.quiz.Option2 = '';
						this.quiz.Option3 = '';
						this.quiz.Option4 = '';
						this.quiz.Answer = '';
                        this.edit = false;
                        this.fetchQuizList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteQuiz(id) {
                axios.delete('api/quiz/' + id)
                    .then((res) => {
                        this.fetchQuizList()
                    })
                    .catch((err) => console.error(err));
            },
        }
    }
</script>
