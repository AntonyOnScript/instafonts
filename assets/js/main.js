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

/* DOM */

const TYPED_TEXT = document.querySelector(".typed-text")
const SELECT_FONT = document.querySelector(".select-font")
const RESULT_AREA = document.querySelector(".result-area")
const CONVERT_BUTTON = document.querySelector(".convert-button")

/* Document Load Fonts */

loadFonts()

/* Core functions */

function loadFonts(){
    for(let index = 1; index < formatedFontsName.length; index++){
        let element = formatedFontsName[index]
        element = element[0]
        
        let option = document.createElement('option')
        let fontName = generateFontName(element, 'Font')
    
        option.setAttribute("value", element)
        option.innerText = fontName +" "+ (index)
    
        SELECT_FONT.appendChild(option)
    }
}

function generateFontName(keyFontName, desiredFontName){
    let fontLetters = fonts[keyFontName]
    let fontName = changeLetters(desiredFontName, fontLetters)

    return fontName.join('')
}

function changeLetters(string, letters){
    string = string.split('')

    for(let i = 0; i < string.length; i++){
        let index = checkCharPositionAtAlphabet(string[i])
        string[i] = letters[index]
    }

    return string
}

function checkCharPositionAtAlphabet(char){
    if(fonts.base_font.indexOf(char) !== -1){
        return fonts.base_font.indexOf(char)
    }
}