<template>
    <div id="app">
        <table>

            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>update</td>
                <td>delete</td>
            </tr>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>update</td>
                <td>delete</td>
            </tr>
        </table>
    </div>
</template>


<script>
export default {
    data: {
        userData:[]
    },
    mounted: function(){
        
        axios.get('http://127.0.0.1:8000/api/post')
            .then(response => {
                this.userData = response.data;
            });
    }


}
</script>