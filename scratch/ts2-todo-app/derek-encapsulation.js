const todoApp = {
	todos: [],
	idCount: 0,

	print: function(note = "") {
		console.log("***", note)
		console.log("Todos: ", this.todos);
	},

	add: function(content) {
		const todo = {
			id: this.idCount++,
			content: content,
		};
		// this.todos.push(todo) - mutates
		this.todos = [...this.todos, todo];
		// creates new ref and assigns new
		this.print(`Added ${content}`);
	},

	remove: function(id) {
		this.print(`Removed ${this.todos[id].content}`);
		this.todos.splice(id, 1);
	},

	complete: function(id) {
		this.todos[id].complete = true;
		this.print(`Completed ${this.todos[id].content}`);
	},

	update: function(id, newContent) {
		let oldContent = 	this.todos[id].content;
		this.todos[id].content = newContent;
		this.print(`Edited ${oldContent} >> ${newContent}`);
	}
}


todoApp.add("Do dishes");
todoApp.add("Go outside");
todoApp.add("Play piano");
todoApp.add("Watch Daria");
todoApp.add("Clean bedroom");

todoApp.remove(1);
todoApp.complete(2);
todoApp.update(3, "Vacuum bedroom");
