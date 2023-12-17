var BRANDS = [
  {
    brandDomainUrl: "maersk",
    brandCode: "maeu"
  },
  {
    brandDomainUrl: "maerskline",
    brandCode: "maeu"
  },
  {
    brandDomainUrl: "safmarine",
    brandCode: "safm"
  },
  {
    brandDomainUrl: "sealand",
    brandCode: "seau"
  },
  {
    brandDomainUrl: "sealandmaersk",
    brandCode: "seau"
  },
  {
    brandDomainUrl: "seagoline",
    brandCode: "sejj"
  },
  {
    brandDomainUrl: "mcc",
    brandCode: "mcpu"
  },
  {
    brandDomainUrl: "maersklinelimited",
    brandCode: "maei"
  }
];
function getBrandFromHostname(url) {
  var urlParts = url.hostname.split(".");
  var urlDomain = urlParts.length > 1 ? urlParts[1] : urlParts[0];
  var toReturn;
  BRANDS.forEach(function(brand) {
    if (brand.brandDomainUrl === urlDomain) toReturn = brand;
  });
  if (!toReturn) {
    BRANDS.forEach(function(brand) {
      if (brand.brandDomainUrl === "maersk") toReturn = brand;
    });
  }
  return toReturn;
}
function getRootLocation(basePath) {
  if (!window.location.origin) {
    window.location.origin =
      window.location.protocol +
      "//" +
      window.location.hostname +
      (window.location.port ? ":" + window.location.port : "");
  }
  return window.location.origin + basePath;
}
function getCurrentBrandCode() {
  var brandCode = getBrandFromHostname(window.location).brandCode;
  switch (brandCode) {
    case "safm":
      return "safm";
    case "seau":
    case "mcpu":
    case "sejj":
      return "seau";
    case "maei":
      return "maei";
    case "maeu":
    default:
      return "maeu";
  }
}

var requiredBrandStyle = getCurrentBrandCode();
var brandStyleSource = document.getElementById("loadBrandStyle").getAttribute("data-" + requiredBrandStyle);
var basePath = document.getElementById("loadBrandStyle").getAttribute("data-basePath");
var appRoot = getRootLocation(basePath);
// this happens in development
if (brandStyleSource.indexOf(".js") > -1) {
  var script = document.createElement("script");
  script.setAttribute("type", "text/javascript");
  script.setAttribute("src", appRoot + brandStyleSource);
  document.getElementsByTagName("head")[0].appendChild(script);
} else if (brandStyleSource.indexOf(".css") > -1) {
  var link = document.createElement("link");
  link.setAttribute("rel", "stylesheet");
  link.setAttribute("type", "text/css");
  link.setAttribute("href", appRoot + brandStyleSource);
  document.getElementsByTagName("head")[0].appendChild(link);
}
