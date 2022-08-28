export function getPageHeight() {
  const body = document.body;
  const html = document.documentElement;

  return Math.max(
    body.scrollHeight,
    body.offsetHeight,
    body.getBoundingClientRect().height,
    html.clientHeight,
    html.scrollHeight,
    html.offsetHeight
  );
}
