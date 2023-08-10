<template>
    <div id="wrapper7">
        <div id="content-wrapper">
            <h2>{{currentItem.title}}</h2>
            <hr>
            <p>{{currentItem.content}}</p>
            <div id="footer">
                <span>Written By Muchiri</span>
                <span>{{currentItem.timestamp}}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props:['isSelected', 'currentItem']
}
</script>

<style>
#wrapper7 {
    min-height: 100vh;
    height: max-content;
    background: #0a192f;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding-bottom: 50px;
}

#content-wrapper {
    height: max-content;
    width: 70%;
    display: flex;
    flex-direction: column;
    text-align: start;
    margin-top: 25px;
}

#content-wrapper h2 {
    font-weight: 700;
    color: #65ffda;
}

#content-wrapper hr {
    width: 100%;
    color: hsl(223, 19%, 93%);
}

#content-wrapper p {
    font-family: Poppins;
    text-indent: 10px;
    color: hsl(223, 19%, 93%);
    font-size: 16px;
}

#footer {
    display: flex;
    flex-direction: column;
    justify-content:center;
    align-items: flex-end;
}

#footer span {
    color: hsl(239, 57%, 85%);
    font-size: 14px;
}

@media (max-width: 768px) {
#content-wrapper {
    height: max-content;
    width: 90%;
}
}

</style>
