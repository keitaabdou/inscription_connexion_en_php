function valid()
{
    if(document.chngpwd.opwd.value=="")
{
    alert("L'ancien mot de passe est vide !!");
    document.chngpwd.opwd.focus();
    return false;
}
    else if(document.chngpwd.npwd.value=="")
{
    alert("Le nouveau mot de passe  est vide !!");
    document.chngpwd.npwd.focus();
    return false;
}
    else if(document.chngpwd.cpwd.value=="")
{
    alert("Confirmer que le mot de passe est vide !!");
    document.chngpwd.cpwd.focus();
    return false;
}
    else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
    alert("Vos nouveau mot de passe sont différents !!");
    document.chngpwd.cpwd.focus();
    return false;
}
    return true;
}
