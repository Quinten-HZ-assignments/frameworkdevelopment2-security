console.log("JavaScript is working!");

const domElement = document.getElementById("dogs");

/**
 * Trying it myself
 * Get data from https://api.thedogapi.com/v1/images/search using Fetch API
 */

// function call
getSwapiData();
/**
 * Function to get the data from the Dog API and deliver it to the DOM
 */
function getSwapiData() {
    fetch("https://api.thedogapi.com/v1/images/search?api_key=be3b44bc-754a-49a5-96d3-b2d4546cc8c5&limit=20&order=RANDOM&size=small")
        .then((response) => response.json())
        .then((data) => {
            //console.log(data)

            for (let i = 0; i < data.length; i++) {
                if (data[i].breeds[0] !== undefined && data[i].breeds[0].breed_group) {
                    let infocontainer = document.createElement("div");
                    let img = document.createElement("img");
                    let name = document.createElement("ul");

                    img.src = data[i].url
                    name.innerHTML = `
                        <li>Name: ${data[i].breeds[0].name}</li>
                        <li>Lifespan: ${data[i].breeds[0].life_span}</li>
                        <li>Breed Group: ${data[i].breeds[0].breed_group}</li>`

                    infocontainer.append(img)
                    infocontainer.append(name)
                    domElement.append(infocontainer)
                }
            }
        })
        .catch((err) => {
            console.log("something went wrong", err);
        });
}
