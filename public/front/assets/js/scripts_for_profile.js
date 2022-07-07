// copy link to clipboard
document.getElementById("copyButton").addEventListener("click", function () {
  copyToClipboard(document.getElementById("copyTarget"));

  Swal.fire({
    position: "top-end",
    icon: "success",
    title: "The link has been copied successfully",
    showConfirmButton: false,
    timer: 1500,
  });
});

function copyToClipboard(elem) {
  // create hidden text element, if it doesn't already exist
  var targetId = "_hiddenCopyText_";
  var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
  var origSelectionStart, origSelectionEnd;
  if (isInput) {
    // can just use the original source element for the selection and copy
    target = elem;
    origSelectionStart = elem.selectionStart;
    origSelectionEnd = elem.selectionEnd;
  } else {
    // must use a temporary form element for the selection and copy
    target = document.getElementById(targetId);
    if (!target) {
      var target = document.createElement("textarea");
      target.style.position = "absolute";
      target.style.left = "-9999px";
      target.style.top = "0";
      target.id = targetId;
      document.body.appendChild(target);
    }
    target.textContent = elem.textContent;
  }
  // select the content
  var currentFocus = document.activeElement;
  target.focus();
  target.setSelectionRange(0, target.value.length);

  // copy the selection
  var succeed;
  try {
    succeed = document.execCommand("copy");
  } catch (e) {
    succeed = false;
  }
  // restore original focus
  if (currentFocus && typeof currentFocus.focus === "function") {
    currentFocus.focus();
  }

  if (isInput) {
    // restore prior selection
    elem.setSelectionRange(origSelectionStart, origSelectionEnd);
  } else {
    // clear temporary content
    target.textContent = "";
  }
  return succeed;
}

// copy code to clipboard
document
  .getElementById("copyButtonCode")
  .addEventListener("click", function () {
    copyCodeToClipboard(document.getElementById("copyTargetCode"));

    Swal.fire({
      position: "top-end",
      icon: "success",
      title: "The code has been copied successfully",
      showConfirmButton: false,
      timer: 1500,
    });
  });

function copyCodeToClipboard(elem) {
  // create hidden text element, if it doesgit n't already exist
  var targetId = "_hiddenCopyText_";
  var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
  var origSelectionStart, origSelectionEnd;
  if (isInput) {
    // can just use the original source element for the selection and copy
    target = elem;
    origSelectionStart = elem.selectionStart;
    origSelectionEnd = elem.selectionEnd;
  } else {
    // must use a temporary form element for the selection and copy
    target = document.getElementById(targetId);
    if (!target) {
      var target = document.createElement("textarea");
      target.style.position = "absolute";
      target.style.left = "-9999px";
      target.style.top = "0";
      target.id = targetId;
      document.body.appendChild(target);
    }
    target.textContent = elem.textContent;
  }
  // select the content
  var currentFocus = document.activeElement;
  target.focus();
  target.setSelectionRange(0, target.value.length);

  // copy the selection
  var succeed;
  try {
    succeed = document.execCommand("copy");
  } catch (e) {
    succeed = false;
  }
  // restore original focus
  if (currentFocus && typeof currentFocus.focus === "function") {
    currentFocus.focus();
  }

  if (isInput) {
    // restore prior selection
    elem.setSelectionRange(origSelectionStart, origSelectionEnd);
  } else {
    // clear temporary content
    target.textContent = "";
  }
  return succeed;
}

$(document).ready(function () {
  $("#personal_information").show().siblings().hide();

  $(".personal_information").click(function () {
    $("#personal_information").slideDown().siblings().hide();

    $(this).addClass("active").siblings().removeClass("active");
  });

  $(".change_password").click(function () {
    $("#change_password").slideDown().siblings().hide();

    $(this).addClass("active").siblings().removeClass("active");
  });

  $(".Referred_accounts").click(function () {
    $("#Referred_accounts").slideDown().siblings().hide();

    $(this).addClass("active").siblings().removeClass("active");
  });
});
