const todos = [];
var count = 0;

function update(note = "") {
	console.log(`******** ${note}`)
	console.log("Todos: ", todos);
}

function add(content) {
	const todo = {
		id: count++,
		content: content,
	};
	todos.push(todo);
	update(`Added ${content}`);
}

function remove(id) {
	update(`Removed ${todos[id].content}`);
	todos.splice(id, 1);
}

function complete(id) {
	todos[id].complete = true;
	update(`Completed ${todos[id].content}`);
}

function edit(id, newContent) {
	let oldContent = 	todos[id].content;
	todos[id].content = newContent;
	update(`Edited ${oldContent} >> ${todos[id].content}`);
}


add("Do dishes");
add("Go outside");
add("Play piano");
add("Watch Daria");
add("Clean bedroom");

remove(1);
complete(2);
edit(3, "Vacuum bedroom");
