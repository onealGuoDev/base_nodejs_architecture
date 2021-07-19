/** @formats */

//formats 專用lib

const examplePaginationData = {
    filteredTotal: 9, // 傳送該條件下的總筆數
    per_page: 5,
    page: 2,
}
// const result = generatePagination(paginationData)

const generatePagination = (paginationData) => {

    const perPage = Number(paginationData.per_page)

    const calTotal = Number(paginationData.filteredTotal)
    const calTotalPage = Math.ceil(calTotal / perPage)
    const currentPage = Number(paginationData.page)

    if (calTotal === 0) {
        return { total: 0, totalPage: 0, current: 0, currentPage: 1, }
    }

    const calCurrent = () => {
        const ifLastPage = currentPage === calTotalPage
        const ifOverPage = currentPage > calTotalPage
        const currentPageRow = calTotal % perPage // 計算餘數

        // 最末頁，總筆數 除 每頁幾筆 取得餘數，為最後一頁的筆數設為 current
        // 若輸入超過的頁數 current 為 0
        // 最末頁之外，current 等同 perPage (每頁填滿)
        // 若總筆數小於要求每頁筆數，則current為總筆數
        if (ifLastPage && calTotalPage!==1) {
            if(currentPageRow === 0){
                return perPage;
            }
            // console.log(`ifLastPage${currentPageRow}`)
            return currentPageRow
        }
        if (ifOverPage) {
            // console.log('ifOverPage')
            return 0
        }
        if(calTotal < perPage){
            return calTotal
        }
        return perPage
    }

    const result = {
        total: calTotal,
        totalPage: calTotalPage,
        current: calCurrent(),
        currentPage,
        // page: paginationData.page,
        // perPage,
    }
    return result
}

export let formatLib = {
    generatePagination,
    //若回傳為空陣列-則直接傳空陣列到下一層

    checkEmptyData: (req, res, next) => {
        if (res.locals.rawParams.length === 0) {
            let outputUsers = {
                data: [],
            }
            res.locals.result = outputUsers
            return next()
        }
    }
}
