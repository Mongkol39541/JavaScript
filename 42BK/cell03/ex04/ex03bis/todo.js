$(function() {
    loadTodoList();
});

$("#openNewTodoWindow").click(function(){
    var newTodo = prompt('Enter a new TODO:');
    if (newTodo !== null && newTodo.trim() !== '') {
        addToTodoList(newTodo);
        saveTodoList();
    }
});

function addToTodoList(todo) {
    var newTodoDiv = $("<div></div>").text(todo);
    newTodoDiv.click(function () {
        removeTodoConfirmation(newTodoDiv);
    });
    $('#ft_list').append(newTodoDiv);
}

function removeTodoConfirmation(todoDiv) {
    var confirmation = confirm('Do you want to remove this TODO?');
    if (confirmation) {
        todoDiv.remove();
        saveTodoList();
    }
}

function loadTodoList() {
    var savedTodoList = getCookie('todoList');
    if (savedTodoList) {
        var todoArray = savedTodoList.split(',');
        for (var i = todoArray.length - 1; i >= 0; i--) {
            addToTodoList(todoArray[i]);
        }
    }
}

function saveTodoList() {
    var ftList = $('#ft_list');
    var todoList = ftList.childNodes;
    var todoArray = [];
    for (var i = 0; i < todoList.length; i++) {
        todoArray.push(todoList[i].textContent);
    }
    setCookie('todoList', todoArray.join(','), 365);
}

function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
}

function getCookie(name) {
    var nameEQ = name + '=';
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
