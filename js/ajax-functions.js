function sendDataUsingPOST(data) {
    fetch(data.url, {
        method: "POST",
        body: data.formData
    })
    .then(res => res.json())
    .then(res => {
        if(res.result) data.success();
        else data.error();
    })
    .catch(() => data.error()
    );
}