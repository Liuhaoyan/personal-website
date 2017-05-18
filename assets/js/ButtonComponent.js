define(['react','react-dom'],function(React,ReactDOM){
    var ButtonComponent = React.createClass({
        render:function(){
            return (
                <input type="submit" value="Contact Me"/>
            );
        },
    });
    return ButtonComponent;
});
