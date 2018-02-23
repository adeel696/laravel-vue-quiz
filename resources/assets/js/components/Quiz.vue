<template>
    <div class='row'> 
		<div class='row'> 
			<router-link :to="{ name: 'CreateQuiz' }" class="btn btn-default">Create Quiz</router-link> 
			<br />
		</div>
		<div class="col-md-6 mb-6">    
			<div clss="row">
				<div class="col-md-12 mb-12 card indigo form-white">
					<h2 class="text-center default-text py-3">Quizzes</h2>
					<ul class="list-group">
						<div v-for="(question, index) in quiz.questions">
							<div v-show="index === questionIndex">
								<li class="list-group-item"><h2>{{ question.text }}</h2></li>
								<li class="list-group-item" v-for="response in question.responses">
									<input type="radio" 
									   v-bind:value="response.correct" 
									   v-bind:name="index" 
									   v-model="userResponses[index]"> {{response.text}}
								</li>
								<li class="list-group-item" style="padding:30px;">
									<button  v-if="questionIndex > 0" v-on:click="prev" class="btn btn-danger btn-xs pull-right" style="margin-top: -10px;">Previos</button>
									<button v-on:click="next" class="btn btn-danger btn-xs pull-right" style="margin-top: -10px;">Next</button>
								</li>
							</div>
						</div>
						
						
						<div v-show="questionIndex === quiz.questions.length">
							<li class="list-group-item">
								<h2>
									Quiz finished
								</h2>
								<p>
									Total score: {{ score() }} / {{ quiz.questions.length }}
								</p>
							</li>
						</div>
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
                list: '',
				quiz: [],
				questionIndex: 0,
				userResponses: [],
            };
        },
        
        created() {
            this.fetchQuizList();
        },
        
        methods: {
            fetchQuizList() {
                axios.get('api/quiz/view').then((res) => {
					this.quiz = res.data;
					this.userResponses = Array(this.quiz.questions.length).fill(false)
                });
            },
			
			next: function() {
			  this.questionIndex++;
			},
			
			prev: function() {
			  this.questionIndex--;
			},
			
			score: function() {
			  return this.userResponses.filter(function(val) { return val }).length;
			}
	  }

    }
</script>
