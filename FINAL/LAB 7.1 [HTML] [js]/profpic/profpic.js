function getpic()
{
    let id= document.getElementById('id').value;
    let pic= document.getElementById('picture');

    if (!id)
    {
        alert("empty id");
    }
    else(!pic)
    {
        alert("empty file");
    }
}