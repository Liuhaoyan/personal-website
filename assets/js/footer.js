require(['react','react-dom','jsx!FormComponent'],function(React,ReactDOM,FormComponent){
    ReactDOM.render(
        // React.createElement('h1',{},'test'),
        <FormComponent />,
        document.getElementById('message-sub')

    );
});

