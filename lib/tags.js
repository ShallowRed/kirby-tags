export function setTagsState(tags) {

  const urlParams = new URLSearchParams(window.location.search)

  tags.forEach((tag) => {
    const param = tag.dataset.param
    const value = tag.dataset.value

    const isActive = (
      urlParams.get(param) === value
      || window.location.pathname.match(new RegExp(`/${param}:${value}`))
    )

    if (isActive) {
      tag.dataset.active = 'true'
    }
    else {
      tag.dataset.active = 'false'
    }
  })
}
