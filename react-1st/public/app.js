const root = document.getElementById('root');

function App() {
  function testAlert(msg) {
    return alert(msg);
  } // setInterval(function () {
  //     App()
  // }, 10000);


  let [count, updateCount] = React.useState(0);
  let [auth, setAuth] = React.useState(false);

  if (!auth) {
    return /*#__PURE__*/React.createElement(React.Fragment, null, /*#__PURE__*/React.createElement("h1", null, "Login"), /*#__PURE__*/React.createElement("button", {
      onClick: function () {
        setAuth(true);
      },
      autoFocus: true
    }, "Login"));
  }

  const fruits = ['Apple', 'Pear', 'Mongo'];
  return /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h3", null, "Clock"), new Date().toLocaleTimeString(), /*#__PURE__*/React.createElement("hr", null)), /*#__PURE__*/React.createElement("button", {
    onClick: testAlert.bind(this, "123")
  }, "alert"), /*#__PURE__*/React.createElement("hr", null), /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h3", null, "Counter"), /*#__PURE__*/React.createElement("button", {
    onClick: function () {
      updateCount(count - 1);
    }
  }, "-"), /*#__PURE__*/React.createElement("b", null, " ", count, " "), /*#__PURE__*/React.createElement("button", {
    onClick: function () {
      updateCount(count + 1);
    }
  }, "+"), /*#__PURE__*/React.createElement("br", null), /*#__PURE__*/React.createElement("button", {
    onClick: function () {
      updateCount(0);
    }
  }, "Reset")), /*#__PURE__*/React.createElement("hr", null), /*#__PURE__*/React.createElement("h3", null, "Logout"), /*#__PURE__*/React.createElement("button", {
    onClick: function () {
      setAuth(false);
    }
  }, "Logout"), /*#__PURE__*/React.createElement("hr", null), /*#__PURE__*/React.createElement("h3", null, "Map"), /*#__PURE__*/React.createElement("ul", null, fruits.map(function (fruits) {
    return /*#__PURE__*/React.createElement("li", {
      key: fruits
    }, fruits); //key={UNIQUE ELEMENT}
  })));
}

ReactDOM.render( /*#__PURE__*/React.createElement(App, null), root);