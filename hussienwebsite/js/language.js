function switchLanguage(lang) {
  try {
    document.documentElement.lang = lang;
    console.log(`Language switched to ${lang}`);
    showLanguageContent(lang);
    setLanguageCookie(lang);
  } catch (error) {
    console.error(error);
  }
}

function showLanguageContent(lang) {
  const allContent = document.querySelectorAll('[lang]');
  for (let i = 0; i < allContent.length; i++) {
    if (lang === 'en') {
      if (allContent[i].lang === 'en') {
        allContent[i].style.display = 'block';
      } else if (allContent[i].lang === 'ku') {
        allContent[i].style.display = 'none';
      }
    } else if (lang === 'ku') {
      if (allContent[i].lang === 'ku') {
        allContent[i].style.display = 'block';
      } else if (allContent[i].lang === 'en') {
        allContent[i].style.display = 'none';
      }
    }
  }
}

function setLanguageCookie(lang) {
  const date = new Date();
  date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
  const expires = `expires=${date.toUTCString()}`;
  document.cookie = `lang=${lang};${expires};path=/`;
}

function getLanguageCookie() {
  const name = 'lang=';
  const decodedCookie = decodeURIComponent(document.cookie);
  const cookieArray = decodedCookie.split(';');
  for (let i = 0; i < cookieArray.length; i++) {
    let cookie = cookieArray[i];
    while (cookie.charAt(0) === ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(name) === 0) {
      return cookie.substring(name.length, cookie.length);
    }
  }
  return null;
}

const savedLang = getLanguageCookie();
if (savedLang) {
  switchLanguage(savedLang);
} else {
  switchLanguage('en');
}

