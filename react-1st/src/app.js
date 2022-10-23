const root = document.getElementById('root');


function App() {

    function testAlert(msg) {
        return alert(msg);
    }
    
    // setInterval(function () {
    //     App()
    // }, 10000);

    let [count, updateCount] = React.useState(0);
    let [auth, setAuth] = React.useState(false);

    if(!auth) {
        return (
            <>
                <h1>Login</h1>
                <button onClick={function () {
                    setAuth(true);
                }} autoFocus>Login</button>
            </>
        )
    }

    const fruits = ['Apple', 'Pear', 'Mongo'];

    return (
        <div>
            <div>
                <h3>Clock</h3>
                {new Date().toLocaleTimeString()}
                <hr />
            </div>    

            <button onClick={ testAlert.bind(this,"123") }>alert</button>
            <hr />

            <div>
                <h3>Counter</h3>
                <button onClick={ function () {
                    updateCount(count - 1);
                } }>-</button>
                <b> {count} </b>
                <button onClick={ function () {
                    updateCount(count + 1);
                } }>+</button>
                <br />
                <button onClick={ function () {
                    updateCount(0);
                } }>Reset</button>
            </div>

            <hr />
            <h3>Logout</h3>
            <button onClick={function () {
                setAuth(false);
            }}>Logout</button>

            <hr />
            <h3>Map</h3>
            <ul>
                {fruits.map(function(fruits){
                    return <li key={fruits} >{fruits}</li>//key={UNIQUE ELEMENT}
                })}
            </ul>
        </div>
    )
}    
ReactDOM.render(<App />, root);

