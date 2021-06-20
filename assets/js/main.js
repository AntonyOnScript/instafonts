/* Refreshing font list */

let toFormatFont = (obj) => {
    let hundleArray = Object.values(obj)
    let newValues = []

    for(let value of hundleArray){
        let newValue = value.split(' ')
        newValues.push(newValue)
    }

    return newValues
}

toFormatFontName = (obj) => {
    let hundleArray = Object.keys(obj)
    let newValues = []

    for(let value of hundleArray){
        let newValue = value.split(' ')
        newValues.push(newValue)
    }

    return newValues
}

let formatedFontsName = toFormatFontName(UNFORMATED_FONTS)
let formatedFonts = toFormatFont(UNFORMATED_FONTS) 

let fonts = {}

for(let i = 0; i <= formatedFontsName.length; i++){
    fonts[formatedFontsName[i]] = formatedFonts[i]
}
