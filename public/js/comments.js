const addBtn = document.getElementById('addComment')
const commentText = document.getElementById('comment')

addBtn.addEventListener('click', () => {
    if(commentText.value === "") {
        return alert("Field shouldn't be empty")
    }
    $.ajax({
        type: "POST",
        url: "../includes/controllers/comment.controller.php",
        data: {
            data: commentText.value
        },
        success: (res) => {
            console.log(res)
            location.href = '/'
        }
    })
})