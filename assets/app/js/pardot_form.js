/* eslint-disable func-names */
import $ from "jquery";

let submitted = false;
const submit = (form) => {
  if (submitted) return;
  form.trigger("submit");
  submitted = true;
}
export const pardotForm = () => {
  const form = $('.js-pardot-form');
  if (!form.length) return;
  submit(form);
  const sendButton = $('.js-pardot-form__message--send');
  if (!sendButton) return;
  sendButton.on('click', function () {
    submit(form);
  });
}
