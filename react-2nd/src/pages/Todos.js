import React from "react";
function Todos(){

    const [activity, setActivity] = React.useState('');
    const [todos, setTodos] = React.useState([]);
    function addList(event) {
        event.preventDefault();
        setTodos([...todos, {
        id: Date.now(),
        activity: activity
        }]);
        setActivity('');
    }
    function deleteActivity(todoId) {
        const filteredTodos = todos.filter(function (todo) {return todo.id !== todoId});
        console.log(filteredTodos);
        setTodos(filteredTodos);
    }
    return (
        <>
            <h2>Todo list</h2>
            <form onSubmit={addList}>
            <input type="text" value={activity} autoFocus onChange={(event)=>setActivity(event.target.value)}></input>
            <button type="submit">Add</button>
            </form>
            <ul>
            {todos.map(function (todo) {
                return (<li key={todo.id}> {todo.activity},   
                <small><a style={{ color: "red", fontSize: 18, paddingLeft: 15 }} href="#" onClick={deleteActivity.bind(this,todo.id)}> checklist </a></small>
                </li>)
            })}
            </ul>
        </>
    )
}

export default Todos;